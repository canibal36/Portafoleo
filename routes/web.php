<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [WelcomeController::class, 'index']);
