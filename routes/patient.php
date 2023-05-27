<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
Route::group([ 'prefix' => 'patient', 'as' => 'patient.'], function () {

    Route::group(['middleware' => ['guest:patient']],function(){
        Route::get('/',[LoginController::class,'showPatientLoginForm'])->name('login-view');
        Route::post('/',[LoginController::class,'patientLogin'])->name('login');

        Route::get('/register',[RegisterController::class,'showPatientRegisterForm'])->name('register-view');
        Route::post('/register',[RegisterController::class,'createPatient'])->name('register');

    });
    Route::get('/dashboard',function(){
        return view('patient');
    })->middleware('auth:patient');

});
