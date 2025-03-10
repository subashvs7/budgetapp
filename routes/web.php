<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');