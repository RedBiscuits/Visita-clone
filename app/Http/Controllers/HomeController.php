<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\SendSms;

class HomeController extends Controller
{

    use SendSms;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testsmsm()
    {

    $message = 'عزيز العميل  رقم تفعيل حسابك هو  ';

    $message  .= '123456';

    $message  .= '  للدخول للتطبيق اضغط على الرابط التالي  ';

    $message  .= '  شكرا لكم لاستخدامكم تطبيق اسره الطب';

    return   $this->SendSms('00201550935404', $message);

    }
}
