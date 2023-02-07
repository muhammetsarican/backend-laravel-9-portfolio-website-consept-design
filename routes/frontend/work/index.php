<?php

use App\Http\Controllers\Frontend\Work\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('work', [WorkController::class, 'index'])->name('work');