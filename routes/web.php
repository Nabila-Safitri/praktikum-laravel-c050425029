<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

/*
|--------------------------------------------------------------------------
| 1. Route dasar (Praktikum 1)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
// Praktikum 1: route dasar
Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

Route::get('/profil', function () {
    return 'Ini halaman profil saya.';
});

Route::get('/kontak', function () {
    return 'Ini halaman kontak.';
});

Route::get('/tentang', function () {
    return 'Ini halaman tentang aplikasi ini.';
});

// Praktikum 2: route group admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

// Praktikum 2, 3, 6: route group akademik
Route::prefix('akademik')->group(function () {
    // route mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
        ->where('nim', '[0-9]+')->name('mahasiswa.show');

    // route matakuliah (milik dosen, hanya dipindah ke dalam group)
    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    // ... create & store dari dosen tetap di sini ...
    Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])->name('matakuliah.show');

    // Matakuliah: hanya show (route model binding), index/create/store tetap milik dosen
    Route::get('/matakuliah/{matakuliah}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
});

// Fallback (wajib paling bawah)
Route::fallback(function () {
    return 'Halaman yang Anda cari tidak ditemukan.';
});