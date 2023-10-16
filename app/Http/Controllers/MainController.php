<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Subscription;
use Carbon\Carbon;
use App\Models\Package;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function successresponse(Request $request)
    {

        $data = $request->all();

        $alldata = $request->all();

        $order_id = $data['order'];

        ksort($data);

        $hmac = $data['hmac'];

        $array = [
            'amount_cents',
            'created_at',
            'currency',
            'error_occured',
            'has_parent_transaction',
            'id',
            'integration_id',
            'is_3d_secure',
            'is_auth',
            'is_capture',
            'is_refunded',
            'is_standalone_payment',
            'is_voided',
            'order',
            'owner',
            'pending',
            'source_data_pan',
            'source_data_sub_type',
            'source_data_type',
            'success',
        ];

        $connectedString = '';

        foreach ($data as $key => $element) {

            if(in_array($key, $array)) {
                $connectedString .= $element;
            }
        }

        $secret = env('PAYMOB_HMAC');

        $hased = hash_hmac('sha512', $connectedString, $secret);

        if ( $hased == $hmac) {

            // Update The Order

        //  return $alldata['success'];

         if($order_id){

             $payment =  Payment::where('order_id', '=', $order_id)->first();

             if($payment){

                $payment->update(['payment_status' => $alldata['success'], 'is_success' => 1]);

                $package = Package::find($payment->package_id);

                Subscription::create([
                    'doctor_id' => $payment->doctor_id,
                    'payment_id' => $payment->id,
                    'package_id' => $payment->package_id,
                    'start_date' => Carbon::now(),
                    'expire_date' => Carbon::now()->addMonths($package->duration),
                    'status' => 1,

                ]);
             }
         }

         dd('success');

         return redirect()->route('success');

            exit;
        }
        echo 'not secure'; exit;

        return view('messages.success');
    }

    public function errorresponse(Request $request)
    {


        $data = $request->all();

        $order_id = $data['order'];

        if($order_id){

            $payment =  Payment::where('order_id', '=', $order_id)->first();

            if($payment){

               $payment->update(['payment_status' => $data['success'], 'is_success' => 1]);

               $package = Package::find($payment->package_id);

               Subscription::create([
                   'doctor_id' => $payment->doctor_id,
                   'payment_id' => $payment->id,
                   'package_id' => $payment->package_id,
                   'start_date' => Carbon::now(),
                   'expire_date' => Carbon::now()->addMonths($package->duration),
                   'status' => 1,

               ]);
            }
        }

        return view('messages.error');
    }



}
