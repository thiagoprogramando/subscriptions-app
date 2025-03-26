<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Access\LoginController;
use App\Http\Controllers\Access\RegisterController;
use App\Http\Controllers\Access\ForgotController;
use App\Http\Controllers\AppController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('logon', [LoginController::class, 'logon'])->name('logon');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('registrer', [RegisterController::class, 'registrer'])->name('registrer');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/app', [AppController::class, 'index'])->name('app');
});
