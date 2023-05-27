<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Module\CompanyController;
Route::group([ 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['middleware' => ['guest:admin']],function(){
        Route::get('/',[LoginController::class,'showAdminLoginForm'])->name('login-view');
        Route::post('/',[LoginController::class,'adminLogin'])->name('login');

        Route::get('/register',[RegisterController::class,'showAdminRegisterForm'])->name('register-view');
        Route::post('/register',[RegisterController::class,'createAdmin'])->name('register');

    });

    Route::group(['middleware' => ['auth:admin']],function(){
        Route::get('/dashboard',function(){return view('admin');});

        Route::group([ 'prefix' => 'company', 'as' => 'company.'], function () {
            Route::get('/',[CompanyController::class,'index'])->name('index');
            Route::get('/index_body',[CompanyController::class,'index_body'])->name('index_body');
            Route::get('/create',[CompanyController::class,'create'])->name('create');
            Route::post('/store',[CompanyController::class,'store'])->name('store');
            Route::get('/edit/{id}',[CompanyController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[CompanyController::class,'update'])->name('update');
            Route::get('/delete/{id}',[CompanyController::class,'destroy'])->name('delete');
        });


    });
});
