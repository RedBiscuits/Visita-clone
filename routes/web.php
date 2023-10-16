<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::get('testsmsm', HomeController::class . '@testsmsm')->name('testsmsm');


Route::get('doctor/success', [MainController::class, 'successresponse'])->name('doctor.success');

Route::get('doctor/error', [MainController::class, 'errorresponse'])->name('doctor.error');

// https://mothercare.shokranegypt.com/doctor/success
