<?php
use App\Http\Controllers\Lab\LabController;
use App\Http\Controllers\Lab\Auth\AuthController;
use App\Http\Controllers\Lab\RaysController;
use App\Http\Controllers\Lab\AnalysisController;
use App\Http\Controllers\Lab\OrdersController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('lab/login', [AuthController::class, 'index'])->name('lab.login');

Route::post('lab/postlogin', [AuthController::class, 'login'])->name('lab.postlogin');

Route::prefix('lab')->name('lab.')->middleware(['Lab'])->group(function() {

Route::middleware(['auth:lab'])->group(function() {


        Route::get('/', [LabController::class, 'index']);

        Route::get('profile', [LabController::class, 'profile'])->name('profile');

        Route::post('profile', [LabController::class, 'updateProfile'])->name('profile.update');

        Route::post('updatepassword', [LabController::class, 'updatepassword'])->name('updatepassword');


        Route::resources([
            'rays'     => RaysController::class,
            'analysis' => AnalysisController::class,
            'orders'   => OrdersController::class,
        ]);



    });

});

});
