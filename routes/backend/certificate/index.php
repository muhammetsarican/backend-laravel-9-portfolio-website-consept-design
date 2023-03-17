<?php

use App\Http\Controllers\Backend\Certificate\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('admin/certificate/add', [CertificateController::class, "create"])->name("certificate_add");
Route::post('admin/certificate/store', [CertificateController::class, "store"])->name("certificate_store");