<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\DashboardPageController::class)->group(function (){
    Route::get("/overview", "overview")->name("overview");
    Route::get("/register", "register")->name("register");
});
