<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
Route::group([ 'prefix' => 'associate', 'as' => 'associate.'], function () {

    Route::group(['middleware' => ['guest:associate']],function(){
        Route::get('/',[LoginController::class,'showAssociateLoginForm'])->name('login-view');
        Route::post('/',[LoginController::class,'associateLogin'])->name('login');

        Route::get('/register',[RegisterController::class,'showAssociateRegisterForm'])->name('register-view');
        Route::post('/register',[RegisterController::class,'createAssociate'])->name('register');

    });
    Route::get('/dashboard',function(){
        return view('associate');
    })->middleware('auth:associate');

});
