<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
=======
>>>>>>> d7f1f16b3af3923998cf2523de66afa94aa2c9b3

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
require __DIR__.'/website.php';
Auth::routes();

require __DIR__.'/admin.php';
require __DIR__.'/employee.php';
require __DIR__.'/patient.php';
require __DIR__.'/doctor.php';
require __DIR__.'/associate.php';
require __DIR__.'/command.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
