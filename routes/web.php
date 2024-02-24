<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MyProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [_SiteController::class, 'index'])->name('index');



Route::resource('/system/categories', CategoryController::class)->names('system.categories');

Route::resource('/system/ads', AdController::class)->names('system.ads');

Route::get('/system/profiles', [MyProfileController::class,'index'])->name('system.profiles.index');
