<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;


/** Admin routes */
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');


/** profile routes */
Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::post('profile/update',[ProfileController::class,'updateProfile'])->name('profile.update');
Route::post('profile/update/password',[ProfileController::class,'updatePassword'])->name('password.update');
/** profile routes */
Route::post('profile/update/password',[ProfileController::class,'updatePassword'])->name('password.update');
