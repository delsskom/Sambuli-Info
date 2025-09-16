<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PotensiController;

Route::get('/', function () {
    return view('home'); // halaman utama
});

Route::resource('kelurahan', KelurahanController::class);
Route::resource('potensi', PotensiController::class);
