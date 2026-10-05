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


Route::prefix('akademik')->group(function () {

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
        ->where('nim', '[0-9]+')
        ->name('mahasiswa.show');

    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
});

