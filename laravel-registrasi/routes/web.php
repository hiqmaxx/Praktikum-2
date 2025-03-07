<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'register');

Route::post('/submit', [RegisterController::class, 'submit']);