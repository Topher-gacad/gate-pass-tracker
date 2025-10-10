<?php

use App\Http\Controllers\TimeTrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', fn() => view('login'))->name('login');
Route::resource('time-tracks', TimeTrackController::class);