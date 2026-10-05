<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index() { return 'index: daftar mata kuliah'; }
    public function create() { return 'create: form tambah mata kuliah'; }
    public function store(Request $request) { return 'store: simpan mata kuliah baru'; }

    public function show(Matakuliah $matakuliah)
    {
        return "Mata kuliah: {$matakuliah->nama_mk}";
    }
}