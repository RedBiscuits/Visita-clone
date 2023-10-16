<?php
use App\Http\Controllers\Pharmacy\PharmacyController;
use App\Http\Controllers\Pharmacy\AuthController;
use App\Http\Controllers\Pharmacy\ProductsController;
use App\Http\Controllers\Pharmacy\OrdersController;
use App\Http\Controllers\Pharmacy\PrescriptionsController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('pharmacy/login', [AuthController::class, 'index'])->name('pharmacy.login');

Route::post('pharmacy/postlogin', [AuthController::class, 'login'])->name('pharmacy.postlogin');

Route::prefix('pharmacy')->name('pharmacy.')->middleware(['Pharmacy'])->group(function() {

Route::middleware(['auth:pharmacy'])->group(function() {


        Route::get('/', [PharmacyController::class, 'index']);

        Route::get('profile', [PharmacyController::class, 'profile'])->name('profile');

        Route::post('profile', [PharmacyController::class, 'updateProfile'])->name('profile.update');

        Route::post('updatepassword', [PharmacyController::class, 'updatepassword'])->name('updatepassword');


        Route::resources([
            'medicine'         => ProductsController::class,
            'orders'           => OrdersController::class,
            'prescription'     => PrescriptionsController::class,
        ]);



    });

});

});
