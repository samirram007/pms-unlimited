<?php

use Illuminate\Support\Facades\Route;
//cache clear
Route::get('/clear_cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return view('website.pages.landing');
    //return 'Cache is cleared';
});
Route::get('/config_cache', function () {
    $exitCode = Artisan::call('config:cache');
    return view('website.pages.landing');
   // return 'Cache created';
});
//storage link
Route::get('/storage_link', function () {
    $exitCode = Artisan::call('storage:link');
    return view('website.pages.landing');
    //return 'Storage is linked';
});
//migrate
Route::get('/migrate', function () {
    $exitCode = Artisan::call('migrate');
    return view('website.pages.landing');
  //  return 'Migration is done';
});
