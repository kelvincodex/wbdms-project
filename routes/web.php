<?php

use Illuminate\Support\Facades\Route;
//routes file here


require "route/web/dashboard-page.php";

Route::get('/', function(){ return view('welcome'); })->name('home');
