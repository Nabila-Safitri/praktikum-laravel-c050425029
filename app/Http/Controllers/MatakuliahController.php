<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index()
    {
        // eager loading relasi 'dosen' agar tidak N+1 query
        $matakuliahs = Matakuliah::with('dosen')->get();

        return 'Halaman daftar seluruh mata kuliah';
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Menampilkan form tambah mata kuliah
    public function create()
    {
        $dosens = User::all(); // untuk dropdown pilih dosen pengampu

        return view('matakuliah.create', compact('dosens'));
    }

    // Menyimpan data mata kuliah baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk'  => 'required|string|unique:matakuliahs,kode_mk',
            'nama_mk'  => 'required|string',
            'sks'      => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8',
            'dosen_id' => 'nullable|exists:users,id',
        ]);

        Matakuliah::create($request->only([
            'kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id',
        ]));

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

   public function show(Matakuliah $matakuliah)
    {
    return "Mata kuliah: {$matakuliah->nama_mk} ({$matakuliah->sks} SKS)";
    }
}
