<?php

use App\Http\Controllers\Backend\ChatRoomController;
use Illuminate\Support\Facades\Route;

Route::resource('/', ChatRoomController::class);