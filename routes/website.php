<?php

use Illuminate\Support\Facades\Route;
Route::middleware(['guest','guest:admin'])->group(function () {
    Route::get('/', function () {
        // dd('abc');
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
