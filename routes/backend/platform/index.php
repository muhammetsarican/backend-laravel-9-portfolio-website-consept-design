<?php

use App\Http\Controllers\Backend\Platform\PlatformController;
use Illuminate\Support\Facades\Route;

Route::get("admin/platform/add", [PlatformController::class, "create"])->name("admin_platform_add");
Route::post("admin/platform/store", [PlatformController::class, "store"])->name("admin_platform_store");