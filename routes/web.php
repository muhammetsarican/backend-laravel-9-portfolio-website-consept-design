<?php

use App\Http\Controllers\Backend\Certificate\CertificateController;
use App\Http\Controllers\Backend\MessageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Backend - Start
require __DIR__.'/backend/chatroom/index.php';
require __DIR__.'/backend/message/index.php';
require __DIR__.'/backend/contact/index.php';
require __DIR__.'/backend/template/index.php';
require __DIR__.'/backend/certificate/index.php';
require __DIR__.'/backend/work/index.php';
require __DIR__.'/backend/comment/index.php';
require __DIR__.'/backend/platform/index.php';
require __DIR__.'/backend/workcategory/index.php';
require __DIR__.'/backend/category/index.php';
// Backend - End
// Frontent - Start
require __DIR__.'/frontend/home/index.php';
require __DIR__.'/frontend/contact/index.php';
require __DIR__.'/frontend/certificate/index.php';
require __DIR__.'/frontend/education/index.php';
require __DIR__.'/frontend/work/index.php';
// Frontent - End
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
