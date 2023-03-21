<?php

use App\Http\Controllers\Frontend\Contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact_store');