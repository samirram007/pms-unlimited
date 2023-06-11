<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Module\ItemController;
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

        // Route::post('logout',function(){
        //     dd('abc');
        // }) ->name('logout');
         Route::post('logout', [LogoutController::class, 'logout']) ->name('logout');
        //  Route::get('logout', [LoginController::class, 'adminLogout']) ->name('logout');
        Route::get('/dashboard',function(){return view('admin');})->name('dashboard');

        Route::group([ 'prefix' => 'company', 'as' => 'company.'], function () {
            Route::get('/',[CompanyController::class,'index'])->name('index');
            Route::get('/index_body',[CompanyController::class,'index_body'])->name('index_body');
            Route::get('/create',[CompanyController::class,'create'])->name('create');
            Route::post('/store',[CompanyController::class,'store'])->name('store');
            Route::get('/edit/{id}',[CompanyController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[CompanyController::class,'update'])->name('update');
            Route::get('/delete/{id}',[CompanyController::class,'destroy'])->name('delete');
        });

        Route::group(['prefix' => 'item', 'as' => 'item.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('test_index');
            Route::get('/create',[ItemController::class,'create'])->name('test_create');
            Route::post('/store',[ItemController::class, 'store'])->name('test_store');
        });

        Route::group(['prefix' => 'test', 'as' => 'test.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/index_body',[ItemController::class,'index_body'])->name('index_body');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ItemController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[ItemController::class,'update'])->name('update');
            Route::get('/delete/{id}',[ItemController::class,'destroy'])->name('delete');

            Route::get('/cat_group', [ItemController::class, 'GetCategoryByGroupID'])->name('get-category-by-groupid');
        });
        Route::group(['prefix' => 'package', 'as' => 'package.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'test_group', 'as' => 'test_group.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'test_category', 'as' => 'test_category.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'test_unit', 'as' => 'test_unit.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'employee', 'as' => 'employee.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'doctor', 'as' => 'doctor.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'patient', 'as' => 'patient.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'associate', 'as' => 'associate.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'designation', 'as' => 'designation.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'department', 'as' => 'department.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'report', 'as' => 'report.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('collection');
        });

        Route::group(['prefix' => 'discount_type', 'as' => 'discount_type.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => 'payment_mode', 'as' => 'payment_mode.'], function(){
            Route::get('/',[ItemController::class, 'index'])->name('index');
            Route::get('/create',[ItemController::class,'create'])->name('create');
            Route::post('/store',[ItemController::class, 'store'])->name('store');
        });

    });
});
