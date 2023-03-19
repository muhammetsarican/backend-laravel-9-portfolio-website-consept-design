<?php

use App\Http\Controllers\Backend\WorkCategory\WorkCategoryController;
use Illuminate\Support\Facades\Route;

Route::get("admin/workcategory/add", [WorkCategoryController::class, "create"])->name("admin_workcategory_add");
Route::post("admin/workcategory/store", [WorkCategoryController::class, "store"])->name("admin_workcategory_store");