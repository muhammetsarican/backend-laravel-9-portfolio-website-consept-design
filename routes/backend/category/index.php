<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get("admin/category/add", [CategoryController::class, "create"])->name("admin_category_add");
Route::post("admin/category/store", [CategoryController::class, "store"])->name("admin_category_store"); 