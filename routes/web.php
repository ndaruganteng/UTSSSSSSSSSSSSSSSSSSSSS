<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DatauserController;


//AUTH
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Grup Admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/data-user', [DatauserController::class, 'index'])->name('data-user.index');
    Route::get('/data-user/hapus_user/{id}', [DatauserController::class, 'hapus_user'])->name('hapus_user');
});