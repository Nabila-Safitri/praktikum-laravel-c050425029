<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/', function () {
    return view('welcome');
});
