<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Access\LoginController;
use App\Http\Controllers\Access\RegisterController;
use App\Http\Controllers\Access\ForgotController;
use App\Http\Controllers\AppController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\User\ProfileController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('registrer', [RegisterController::class, 'registrer'])->name('registrer');

Route::middleware(['auth'])->group(function () {

    Route::get('/app', [AppController::class, 'index'])->name('app');

    Route::get('/profile', function () {return view('user.profile');})->name('profile');

    Route::post('/user', [ProfileController::class, 'update'])->name('user.update');

});

