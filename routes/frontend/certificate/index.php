<?php

use App\Http\Controllers\Frontend\Certificate\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('certificate', [CertificateController::class, 'index'])->name('certificate');