<?php
use App\Http\Controllers\TimeTrackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;

Route::get('login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('login', [LoginController::class, 'login'])
    ->middleware('guest')
    ->name('login.post');

Route::post('logout', [LogoutController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('time-tracks', TimeTrackController::class);
Route::resource('users', UserController::class);

