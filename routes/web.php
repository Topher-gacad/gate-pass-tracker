<?php

use App\Http\Controllers\TimeTrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('time_tracks', TimeTrackController::class);
