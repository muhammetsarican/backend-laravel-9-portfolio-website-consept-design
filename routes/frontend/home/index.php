<?php

use App\Http\Controllers\Frontend\HomeController;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);
Route::get('/', [HomeController::class, 'index'])->name("home");
