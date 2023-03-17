<?php

use App\Http\Controllers\Backend\Work\WorkController;
use Illuminate\Support\Facades\Route;

Route::get("admin/work/add", [WorkController::class, "create"])->name("work_add");
Route::post("admin/work/store", [WorkController::class, "store"])->name("work_store");