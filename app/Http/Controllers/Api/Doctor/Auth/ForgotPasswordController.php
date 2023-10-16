<?php

namespace App\Http\Controllers\Api\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class ForgotPasswordController extends Controller
{

    public function getcode(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:doctors,phone',
        ]);

        $code = rand(1000, 9999);

       $doctor = Doctor::where('phone', $request->phone)->first();

        $doctor->update([
            'code' => $code,
        ]);

       return $this->otpSms($request->phone, $code);

        return $this->success('Code Sent Successfully');
    }



    public function forgotpassword(Request $request)
    {
        $request->validate([
            'phone'    => 'required|exists:doctors,phone',
            'code'     => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $doctor = Doctor::where('phone', $request->phone)->first();

        if ($doctor->code != $request->code) {

            return $this->error('Code is not correct');
        }

        $doctor->update([
            'password' => bcrypt($request->password),
            'code'     => null,
        ]);

        return $this->success('Password Changed Successfully');
    }


}
