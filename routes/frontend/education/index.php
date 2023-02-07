<?php

use App\Http\Controllers\Frontend\Education\EducationController;
use Illuminate\Support\Facades\Route;

Route::get('education', [EducationController::class, 'index'])->name('education');