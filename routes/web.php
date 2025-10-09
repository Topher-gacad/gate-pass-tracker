<?php

use Illuminate\Support\Facades\Route;

// Default route (optional)
Route::get('/', fn() => view('welcome'));

// Login page route
Route::get('/login', fn() => view('login'))->name('login');




