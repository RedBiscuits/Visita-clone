<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\HospitalController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PackageController;
use App\Http\Controllers\Dashboard\SubscriptionsController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\AppoinmentsController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\AppSettingController;
use App\Http\Controllers\Dashboard\PharmacyController;
use App\Http\Controllers\Dashboard\ProductCategoryController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\PrescriptionsController;
use App\Http\Controllers\Dashboard\OffersController;
use App\Http\Controllers\Dashboard\LabsController;
use App\Http\Controllers\Dashboard\RaysCategoryController;
use App\Http\Controllers\Dashboard\AnalysesCategoryController;
use App\Http\Controllers\Dashboard\AnalysesController;
use App\Http\Controllers\Dashboard\OrdersController;
use App\Http\Controllers\Dashboard\RaysController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('dashboard/login', [AuthController::class, 'index'])->name('dashboard.login');

Route::post('dashboard/postlogin', [AuthController::class, 'login'])->name('dashboard.postlogin');

Route::prefix('dashboard')->name('dashboard.')->middleware(['Admin'])->group(function() {

Route::middleware(['auth:admin'])->group(function() {


    Route::get('/', [HomeController::class, 'index']);

    // Route::get('login', [AuthController::class, 'index'])->name('login');

    // Route::middleware(['auth','Admin'])->group(function() {

    Route::resources([

        'department'       => DepartmentController::class,
        'doctors'          => DoctorController::class,
        'department'       => DepartmentController::class,
        'hospitals'        => HospitalController::class,
        'patient'          => PatientController::class,
        'packages'         => PackageController::class,
        'subscriptions'    => SubscriptionsController::class,
        'payments'         => PaymentController::class,
        'insurance'        => InsuranceController::class,
        'appoinments'      => AppoinmentsController::class,
        'pharmacy'         => PharmacyController::class,
        'productcategory'  => ProductCategoryController::class,
        'products'         => ProductController::class,
        'prescription'     => PrescriptionsController::class,
        'offers'           => OffersController::class,
        'labs'             => LabsController::class,
        'rayscategory'     => RaysCategoryController::class,
        'analysiscategory' => AnalysesCategoryController::class,
        'analysis'         => AnalysesController::class,
        'orders'           => OrdersController::class,
        'rays'             => RaysController::class,
    ]);

    Route::get('general-setting', [SettingController::class, 'index'])->name('general-setting');

    Route::post('general-setting', [SettingController::class, 'update'])->name('general-setting.update');

    Route::get('profile', [HomeController::class, 'profile'])->name('profile');

    Route::post('profile', [HomeController::class, 'updateProfile'])->name('profile.update');

    Route::post('updatepassword', [HomeController::class, 'updatepassword'])->name('updatepassword');

    Route::post('doctorsstatus', [DoctorController::class, 'status'])->name('doctors.status');

    Route::get('contact/doctor', [ContactController::class, 'index'])->name('contact.doctor');

    Route::get('contact/patient', [ContactController::class, 'index'])->name('contact.patient');



    // App Setting

    Route::get('privacy', [AppSettingController::class, 'privacy'])->name('privacy');

    Route::post('privacysupdate', [AppSettingController::class, 'privacysupdate'])->name('privacysupdate');


// });
});


});
});
