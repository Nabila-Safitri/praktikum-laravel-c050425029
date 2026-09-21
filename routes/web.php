<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/', function () {
    return view('welcome');

});

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
