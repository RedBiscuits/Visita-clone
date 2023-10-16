<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Doctor\Auth\LoginController;
use App\Http\Controllers\Api\Doctor\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Doctor\GeneralController;
use App\Http\Controllers\Api\Doctor\PackagesController;
use App\Http\Controllers\Api\Doctor\SubscripeController;
use App\Http\Controllers\Api\Doctor\CouponController;
use App\Http\Controllers\Api\Doctor\WorktimesController;
use App\Http\Controllers\Api\Doctor\AppoinmentController;

Route::middleware("Language")->group(function () {

Route::post('login', [LoginController::class, 'login']);

Route::post('register', [LoginController::class, 'register']);

Route::post('getcode', [ForgotPasswordController::class, 'getcode']);

Route::post('forgotpassword', [ForgotPasswordController::class, 'forgotpassword']);

// Departments

Route::get('departments', [GeneralController::class, 'departments']);

// Hospitals

Route::get('hospitals', [GeneralController::class, 'hospitals']);



Route::group(['middleware' => 'auth:doctor'], function () {

    Route::get('profile', [LoginController::class, 'me']);

    Route::post('logout', [LoginController::class, 'logout']);

    Route::post('updateprofile', [LoginController::class, 'updateProfile']);

    Route::post('updatepassword', [LoginController::class, 'updatePassword']);

    Route::post('accesstoken', [LoginController::class, 'accesstoken']);

    Route::post('confirmphone', [LoginController::class, 'confirmphone']);


    // Change Availability

    Route::post('active', [LoginController::class, 'active']);

    // Price

    Route::post('price', [LoginController::class, 'price']);

    // Packages

    Route::get('packages', [PackagesController::class, 'index']);

    // Subscripe

    Route::post('subscripe', [SubscripeController::class, 'store']);

    Route::get('subscriptions', [SubscripeController::class, 'subscriptions']);

    // Payments

    Route::get('payments', [SubscripeController::class, 'payments']);


    // coupons

    Route::get('coupons', [CouponController::class, 'index']);

    Route::post('addcoupon', [CouponController::class, 'store']);

    Route::post('deletecoupon/{id}', [CouponController::class, 'destroy']);

    Route::post('updatecoupon/{id}', [CouponController::class, 'update']);

    Route::get('coupon/{id}', [CouponController::class, 'show']);



    // Work Times

    Route::get('worktimes', [WorktimesController::class, 'index']);

    Route::post('updateworkdays', [WorktimesController::class, 'update']);

    Route::post('updatedaystatus', [WorktimesController::class, 'status']);


    // Notifications

    Route::get('notifications', [GeneralController::class, 'notifications']);

    Route::post('suggestion', [GeneralController::class, 'suggestion']);


    // Faq

    Route::get('faq', [GeneralController::class, 'faq']);

    // Privacy

    Route::get('privacy', [GeneralController::class, 'privacy']);


    // Apoinments

    Route::get('today', [AppoinmentController::class, 'today']);

    Route::get('coming', [AppoinmentController::class, 'coming']);

    Route::get('done', [AppoinmentController::class, 'done']);

    Route::get('apoinment/{id}', [AppoinmentController::class, 'show']);


    // Requests

    Route::get('requests/all', [AppoinmentController::class, 'all']);

    Route::get('requests/home', [AppoinmentController::class, 'home']);

    Route::get('requests/video', [AppoinmentController::class, 'video']);

    Route::get('requests/clinic', [AppoinmentController::class, 'clinic']);

    Route::get('request/{id}', [AppoinmentController::class, 'show']);

    Route::get('appoinments/all', [AppoinmentController::class, 'appoinments']);


    // Accept

    Route::post('requests/accept/{id}', [AppoinmentController::class, 'accept']);

    Route::post('requests/refuse/{id}', [AppoinmentController::class, 'refuse']);

    // Home


    Route::get('home', [GeneralController::class, 'home']);



});







});




