<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;

class ForgotPasswordController extends Controller
{

    public function getcode(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:patients,phone',
        ]);

        $code = rand(1000, 9999);

       $patient = Patient::where('phone', $request->phone)->first();

        $patient->update([
            'code' => $code,
        ]);

        $this->otpSms($request->phone, $code);

        return $this->success('Code Sent Successfully');
    }



    public function forgotpassword(Request $request)
    {
        $request->validate([
            'phone'    => 'required|exists:patients,phone',
            'code'     => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $patient = Patient::where('phone', $request->phone)->first();

        if ($patient->code != $request->code) {

            return $this->error('Code is not correct');
        }

        $patient->update([
            'password' => bcrypt($request->password),
            'code'     => null,
        ]);

        return $this->success('Password Changed Successfully');
    }


}
