<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\SaranaPrasaranaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman awal (landing page)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman utama (menampilkan potensi dari database)
Route::get('/home', [PotensiController::class, 'index'])->name('home');

// Halaman struktur organisasi
Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});

// Halaman Sarana & Prasarana
Route::get('/home', [App\Http\Controllers\PotensiController::class, 'index'])->name('home');

