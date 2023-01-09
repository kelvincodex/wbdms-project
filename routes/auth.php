<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'register')->name('register');

    //login
    Route::get('/login', 'login')->name('login');
    Route::post('/login/save', 'loginSave')->name('login.save');
});
