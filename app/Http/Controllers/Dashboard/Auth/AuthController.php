<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.auth.login');
    }




    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;


        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {

            return redirect()->route('dashboard.');

        }else{

        }

        return redirect()->back()->with(['error' => 'هناك خطأ في البيانات']);
    }

}
