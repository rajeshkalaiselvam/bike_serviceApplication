<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Accountcontroller;
use App\Http\Controllers\BookingController;


use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Revalidate;
use App\Http\Middleware\AdminCheck;



// use

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'index']);
Route::get('register',[LoginController::class,'register']);
Route::post('postregister',[LoginController::class,'postregister']);
Route::post('postlogin',[LoginController::class,'postLogin']);

Route::get('contact',[LoginController::class,'contact']);



Route::get('owner',[Authcontroller::class,'index'])->middleware(Revalidate::class);
Route::post('adminLogin',[Authcontroller::class,'Postlogin']);

Route::middleware([Authenticate::class])->group(function () {

    Route::get('my-account',[Accountcontroller::class,'index']);
    Route::post('profile-Update',[Accountcontroller::class,'ProfileUpdate']);
    Route::post('booking',[Accountcontroller::class,'booking']);
    Route::get('logout',[LoginController::class,'logout']);

    Route::middleware([AdminCheck::class])->group(function () {

        Route::get('Adminlogout',[Authcontroller::class,'logout']);
        Route::get('dashboard',[Authcontroller::class,'dashboard']);

        Route::get('booking',[BookingController::class,'index']);
        Route::post('booking/updatestatus',[BookingController::class,'updatestatus']);



        Route::get('service',[ServiceController::class,'index']);
        Route::get('service/create',[ServiceController::class,'create']);
        Route::post('service/store',[ServiceController::class,'store']);
        Route::get('service/edit/{id}',[ServiceController::class,'edit']);
        Route::post('service/update',[ServiceController::class,'update']);
        Route::get('service/destroy/{id}',[ServiceController::class,'destroy']);

    });
});