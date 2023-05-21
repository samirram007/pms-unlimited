<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('website.pages.landing');
    })->name('landing');
    // Route::get('/services', function () {
    //     return view('website.pages.services');
    // });
    Route::get('/doctors', function () {
        return view('website.pages.doctors');
    })->name('doctors');
    Route::get('/home-services', function () {
        return view('website.pages.home_services');
    })->name('home_services');
    Route::get('/gallery', function () {
        return view('website.pages.gallery');
    })->name('gallery');
    Route::get('/services/pathology', function () {
        return view('website.pages.services.pathology');
    })->name('services_pathology');
    Route::get('/services/radiology', function () {
        return view('website.pages.services.radiology');
    })->name('services_radiology');
    Route::get('/services/cardiology', function () {
        return view('website.pages.services.cardiology');
    })->name('services_cardiology');
    // Route::get('/contact-us', function () {
    //     return view('website.pages.contact_us');
    // });
    // Route::get('/privacy', function () {
    //     return view('website.pages.privacy');
    // });
});
// Route::middleware('guest')->get('/', function () {
//     return view('website.pages.landing');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
