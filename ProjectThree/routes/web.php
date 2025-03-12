<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('user/register', [UserController::class, 'register'])->name('user-register');
Route::get('user/login',[UserController::class,'login'])->name('user-login');
Route::get('admin/login',[AdminController::class,'login'])->name('admin-login');
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard');