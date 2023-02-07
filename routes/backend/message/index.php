<?php

use App\Http\Controllers\Backend\MessageController;
use Illuminate\Support\Facades\Route;

Route::post('message/{room_id}', [MessageController::class, 'store'])->name('message_store');