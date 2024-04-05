<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Manajemen\MobilController;
use App\Http\Controllers\Manajemen\UserController;
use App\Http\Controllers\Peminjaman\PeminjamanMobilController;
use App\Http\Controllers\Registrasi\RegistrasiController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/', [PeminjamanMobilController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/mobil-disewa', [PeminjamanMobilController::class, 'sewa'])->name('peminjaman_mobil.sewa');
    Route::resource('user', UserController::class);
    Route::resource('mobil', MobilController::class);
    Route::resource('peminjaman_mobil', PeminjamanMobilController::class);

});

// Registrasi
Route::get('registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
Route::post('register', [RegistrasiController::class, 'register'])->name('registrasi.register');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/aunthenticate', [AuthController::class, 'authenticate'])->name('authenticate');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');