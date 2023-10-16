<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:pharmacy')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pharmacy.auth.login');
    }


    public function login(Request $request)
    {

        $remember_me = $request->has('remember_me') ? true : false;


        if (auth()->guard('pharmacy')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {

            return redirect()->route('pharmacy.');

        }else{

        }

        return redirect()->back()->with(['error' => 'هناك خطأ في البيانات']);
    }

}
