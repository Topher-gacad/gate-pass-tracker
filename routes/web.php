
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('login.post');

Route::post('logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('home');