<?php

use App\Http\Controllers\Backend\Work\WorkController;
use Illuminate\Support\Facades\Route;

Route::get("admin/work/create", [WorkController::class, "create"])->name("work_create");
Route::post("admin/work/store", [WorkController::class, "store"])->name("work_store");