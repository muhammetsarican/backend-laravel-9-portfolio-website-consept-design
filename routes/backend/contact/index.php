<?php

use App\Http\Controllers\Backend\Contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::post('contact/store', [ContactController::class, 'store'])->name('contact_store');