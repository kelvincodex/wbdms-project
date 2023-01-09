<?php

use Illuminate\Support\Facades\Route;
//routes file here


require "route/web/dashboard-page.php";
require "route/web/artisan-command.php";

Route::get('/', function(){ return view('welcome'); })->name('home');
