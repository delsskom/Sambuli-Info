<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman awal (landing page)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman utama (hanya tampilan publik)
Route::get('/home', function () {
    return view('home');
})->name('home');

// Resource routes (user bisa lihat data, admin bisa edit via dashboard)
Route::resource('kelurahan', KelurahanController::class);
Route::resource('potensi', PotensiController::class);

// ---- Auth Routes Sederhana ---- //
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ---- Dashboard Admin ---- //
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
