<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PayMobClass {



    public static function getToken() {

        $response = Http::post('https://accept.paymob.com/api/auth/tokens', [

           'api_key' => env('PAYMOB_API_KEY')

        ]);

        return $response->object()->token;
    }



    public function createOrder($token, $amount) {

        $items = [ ];

        $data = [
            "auth_token"      =>   $token,
            "delivery_needed" =>"false",
            "amount_cents"    => $amount,
            "currency"        => "EGP",
            "items"           => $items,

        ];

        $response = Http::post('https://accept.paymob.com/api/ecommerce/orders', $data);


        return $response->object();
    }



    public function getPaymentToken($order, $token, $customerOrder)
    {



        $customerOrder->email;

        $splitName  = explode(' ', $customerOrder->name, 2);

        $first_name = $splitName[0];

        $last_name  = ! empty($splitName[1]) ? $splitName[1] : '';


        $billingData = [
            "apartment"          => "803",
            "email"              => $customerOrder->email,
            "floor"              => "42",
            "first_name"         => $first_name,
            "last_name"          => ($last_name) ? $last_name : $first_name ,
            "street"             => "Ethan Land",
            "building"           => "8028",
            "phone_number"       => $customerOrder->phone,
            "shipping_method"    => "PKG",
           // "postal_code"        => "01898",
             "city"               => "cairo",
            "country"            => "EG",
           // "state"              => "Utah"
        ];

      $data = [
            "auth_token"        => $token,
            "amount_cents"      => $order->amount_cents,
            "expiration"        => 3600,
            "order_id"          => $order->id,
            "billing_data"      => $billingData,
            "currency"          => "EGP",
            "integration_id"    => env('PAYMOB_INTEGRATION_ID')
        ];

         $response = Http::post('https://accept.paymob.com/api/acceptance/payment_keys', $data);


        return $response->object()->token;
    }


    public function callback(Request $request)
    {

        $data = $request->all();

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
            echo "secure" ; exit;
        }
        echo 'not secure'; exit;
    }


}

