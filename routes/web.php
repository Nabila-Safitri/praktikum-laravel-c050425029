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
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
    Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
    Route::get('/matakuliah/{matakuliah}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
});

Route::get('/profil-view', function () {
    return view('profil')
        ->with('nama', 'Nabila Safitri')
        ->with('nim', 'C050425029')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

Route::get('/strukturdata', function () {
    return view('akademik.sturkturdata');
});

    Route::fallback(function () {
        return 'Halaman yang Anda cari tidak ditemukan.';
});