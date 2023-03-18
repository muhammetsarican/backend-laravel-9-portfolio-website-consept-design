<?php

use App\Http\Controllers\Backend\Comment\CommentController;
use Illuminate\Support\Facades\Route;

Route::get("admin/comment/create", [CommentController::class, "create"])->name('comment_create');
Route::post("admin/comment/store", [CommentController::class, "store"])->name("comment_store");