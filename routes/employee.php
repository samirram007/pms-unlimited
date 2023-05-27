<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
Route::group([ 'prefix' => 'employee', 'as' => 'employee.'], function () {

    Route::group(['middleware' => ['guest:employee']],function(){
        Route::get('/',[LoginController::class,'showEmployeeLoginForm'])->name('login-view');
        Route::post('/',[LoginController::class,'employeeLogin'])->name('login');

        Route::get('/register',[RegisterController::class,'showEmployeeRegisterForm'])->name('register-view');
        Route::post('/register',[RegisterController::class,'createEmployee'])->name('register');

    });
    Route::get('/dashboard',function(){
        return view('employee');
    })->middleware('auth:employee');

});
