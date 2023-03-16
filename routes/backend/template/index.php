<?php
use App\Http\Controllers\Backend\Template\TemplateController;
use Illuminate\Support\Facades\Route;

Route::post("template/store", [TemplateController::class, 'store'])->name('template_store');