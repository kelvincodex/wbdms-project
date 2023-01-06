<?php

use App\Http\Controllers\User\MailController;
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\DashboardPageController::class)->group(function (){
    Route::get("/overview", "overview")->name("overview");
    Route::get("/register", "register")->name("register");
});

Route::prefix('user')->name('user.')->group(function(){
    Route::controller(MailController::class)->prefix('mail')->name('mail.')->group(function(){
        Route::get('/new', 'new')->name('new');
    });
});
