<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/', [_SiteController::class, 'index'])->name('index');


Route::resource('/system/categories', CategoryController::class)->names('system.categories');
