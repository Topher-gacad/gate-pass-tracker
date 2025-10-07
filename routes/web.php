<?php

use App\Http\Controllers\TimeTrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes for TimeTrack
Route::resource('time_tracks', TimeTrackController::class);
