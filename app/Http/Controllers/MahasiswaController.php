<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{   
     public function index()
    {
    return 'Halaman daftar seluruh mahasiswa';
    }

    public function show($nim)
    {
    return "Halaman detail mahasiswa dengan NIM: {$nim}";
    }
}
