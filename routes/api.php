<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\LoginController;
use App\Http\Controllers\Api\User\CategoryController;
use App\Http\Controllers\Api\User\DoctorController;
use App\Http\Controllers\Api\User\ForgotPasswordController;
use App\Http\Controllers\Api\Doctor\GeneralController;
use App\Http\Controllers\Api\User\OfferController;
use App\Http\Controllers\Api\User\ProductController;
use App\Http\Controllers\Api\User\OrderController;
use App\Http\Controllers\Api\User\AppointmentController;
use App\Http\Controllers\Api\User\PharmacyController;
use App\Http\Controllers\Api\User\ProductCategoryController;
use App\Http\Controllers\Api\User\PrescriptionController;
use App\Http\Controllers\Api\User\RaysController;
use App\Http\Controllers\Api\User\LabsController;
use App\Http\Controllers\Api\User\MainController;

Route::middleware("Language")->group(function () {

    Route::post('login', [LoginController::class, 'login']);

    Route::post('register', [LoginController::class, 'register']);

    Route::post('getcode', [ForgotPasswordController::class, 'getcode']);

    Route::post('forgotpassword', [ForgotPasswordController::class, 'forgotpassword']);

    // Faq

    Route::get('faq', [GeneralController::class, 'faq']);

    // Privacy

    Route::get('privacy', [GeneralController::class, 'privacy']);
        Route::group(['middleware' => 'auth:patient'], function () {

            // AUth

            Route::post('logout', [LoginController::class, 'logout']);

            Route::get('profile', [LoginController::class, 'me']);

            Route::post('refresh', [LoginController::class, 'refresh']);

            Route::post('update', [LoginController::class, 'update']);

            Route::post('updatepassword', [LoginController::class, 'updatepassword']);

            Route::post('accesstoken', [LoginController::class, 'accesstoken']);

            // Categories

            Route::get('categories', [CategoryController::class, 'index']);

            Route::get('category/{id}', [CategoryController::class, 'show']);


          //Doctors


          Route::prefix('doctors')->group(function () {

            Route::get('/', [DoctorController::class, 'index']);

            Route::get('/{id}', [DoctorController::class, 'show']);

          });

          // Offers

          Route::get('offers', [OfferController::class, 'index']);

          Route::get('offer/{id}', [OfferController::class, 'show']);

          // Products

          Route::get('products', [ProductController::class, 'index']);

          Route::get('product/{id}', [ProductController::class, 'show']);



          // Orders

            Route::prefix('orders')->group(function () {

                Route::get('/', [OrderController::class, 'index']);

                Route::get('/{id}', [OrderController::class, 'show']);

                Route::post('/store', [OrderController::class, 'store']);

                Route::post('/update/{id}', [OrderController::class, 'update']);

                Route::post('/delete/{id}', [OrderController::class, 'destroy']);

            });


            // Appoinments

            Route::prefix('appointments')->group(function () {

                Route::get('/', [AppointmentController::class, 'index']);

                Route::get('/{id}', [AppointmentController::class, 'show']);

                Route::post('/store', [AppointmentController::class, 'store']);

                Route::post('/delete/{id}', [AppointmentController::class, 'destroy']);

            });



            // Pharmacy

            Route::prefix('pharmacy')->group(function () {

                Route::get('/', [PharmacyController::class, 'index']);

                Route::get('/{id}', [PharmacyController::class, 'show']);

                Route::get('/{id}/{category}', [PharmacyController::class, 'category']);

            });


            // Product Category


            Route::prefix('productcategory')->group(function () {

                Route::get('/', [ProductCategoryController::class, 'index']);

                Route::get('/{id}', [ProductCategoryController::class, 'show']);

            });

            // prescription

            Route::prefix('prescription')->group(function () {

                Route::get('/', [PrescriptionController::class, 'index']);

                Route::get('/{id}', [PrescriptionController::class, 'show']);

                Route::post('/store', [PrescriptionController::class, 'store']);

                Route::post('/update/{id}', [PrescriptionController::class, 'update']);

                Route::post('/delete/{id}', [PrescriptionController::class, 'destroy']);

            });


            // Rays

            Route::prefix('rays')->group(function () {

                Route::get('/', [RaysController::class, 'index']);

                Route::get('/categories', [RaysController::class, 'categories']);

                Route::get('/category/{id}', [RaysController::class, 'category']);

            });


            // Analysis

            Route::prefix('analysis')->group(function () {

                Route::get('/categories', [RaysController::class, 'analysis']);

                Route::get('/category/{id}', [RaysController::class, 'analysisshow']);

            });



            // Labs

            Route::prefix('labs')->group(function () {

                Route::get('/', [LabsController::class, 'index']);

                Route::get('/{id}', [LabsController::class, 'show']);

            });


            // Suggestions

            Route::post('suggestion', [MainController::class, 'suggestion']);

    });

    });
