<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
Route::group([ 'prefix' => 'doctor', 'as' => 'doctor.'], function () {

    Route::group(['middleware' => ['guest:doctor']],function(){
        Route::post('logout', [LoginController::class, 'doctorLogout']) ->name('logout');
        Route::get('/',[LoginController::class,'showDoctorLoginForm'])->name('login-view');
        Route::post('/',[LoginController::class,'doctorLogin'])->name('login');

        Route::get('/register',[RegisterController::class,'showDoctorRegisterForm'])->name('register-view');
        Route::post('/register',[RegisterController::class,'createDoctor'])->name('register');

    });
    Route::get('/dashboard',function(){
        return view('doctor');
    })->middleware('auth:doctor');

});
