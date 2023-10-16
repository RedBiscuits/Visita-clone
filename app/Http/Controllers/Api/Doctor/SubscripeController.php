<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PayMobClass;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Http\Resources\Doctor\Payment\PaymentResource;
use App\Models\Subscription;
use App\Http\Resources\Doctor\Subscripe\SubscriptionResource;

class SubscripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriptions()
    {
        $subscriptions = Subscription::where('doctor_id', Auth::id())->latest()->get();

        return SubscriptionResource::collection($subscriptions);
    }


    public function payments()
    {
        $payments = Payment::where('doctor_id', Auth::guard('doctor')->user()->id)->where('is_success', 1)->latest()->get();

        return PaymentResource::collection($payments);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'package_id' => 'required|numeric|exists:packages,id',
        ]);

        $package = Package::find($request->package_id);


        $PayMobClass  =    new PayMobClass();

        $token        =   $PayMobClass->getToken();

       $amount       =    $package->price * 100;

       $order        =   $PayMobClass->createOrder($token, $amount);


        $user = Auth::user();

       if($order && $order->id){

            // order_id

            Payment::create([
                'doctor_id'           => Auth::user()->id,
                'package_id'          => $package->id,
                'order_id'            => $order->id,
                'amount'              => $package->price,
                'payment_status'      => 'pending',
                'payment_token'       => $order->token,

            ]);

           $paymentToken =   $PayMobClass->getPaymentToken($order, $token, $user);

            $link = 'https://accept.paymobsolutions.com/api/acceptance/iframes/'.env('PAYMOB_IFRAME_ID').'?payment_token='.$paymentToken;

            return response()->json([
                'saaota' => $link
            ], 200);
    }

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
