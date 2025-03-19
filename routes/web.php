<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Access\LoginController;
use App\Http\Controllers\Access\RegisterController;
use App\Http\Controllers\Access\ForgotController;


Route::get('/', function () {
    return view('login');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('forgot-password', [ForgotController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotController::class, 'sendResetLinkEmail'])->name('password.email');

Route::middleware('auth')->get('/app', function () {
    return view('app');  
})->name('app');
