<?php


namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait SendSms {

    public function sendSms($phone, $message)
    {
        try {

            $response = Http::post('https://smsmisr.com/api/v2/', [
                'username'   => 'RKqkVPBg',
                'password'   => 'KC2iqGiIu9A101d',
                'sender'     => 'YM Osrateb',
                'mobile'     =>  $phone,
                'message'    =>  $message,
                'language'   =>  '2',
            ]);



            $response = json_decode(trim($response), TRUE);

             if($response && $response['code'] == '1901'){

               return True;

             }else{

                return False;
             }


        } catch (Exception $e) {

            return False;
        }

    }


    public function otpSms($phone, $otp)
    {
        try {

             $response = Http::post('https://smsmisr.com/api/v2/', [
                'username'   => 'RKqkVPBg',
                'password'   => 'KC2iqGiIu9A101d',
                'sender'     => 'YM Osrateb',
                'mobile'     =>  $phone,
                'message'    =>  'Your OTP is: '.$otp,
                'language'   =>  '2',
            ]);


          $response = json_decode(trim($response), TRUE);

             if($response && $response['code'] == '1901'){

               return True;

             }else{

                return False;
             }
            } catch (Exception $e) {

                return False;
            }

        }

}
