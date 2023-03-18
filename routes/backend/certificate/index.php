<?php

use App\Http\Controllers\Backend\Certificate\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('admin/certificate/create', [CertificateController::class, "create"])->name("certificate_create");
Route::post('admin/certificate/store', [CertificateController::class, "store"])->name("certificate_store");