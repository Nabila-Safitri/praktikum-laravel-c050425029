<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <label>Kode MK:</label><br>
        <input type="text" name="kode_mk" value="{{ old('kode_mk') }}"><br><br>

        <label>Nama MK:</label><br>
        <input type="text" name="nama_mk" value="{{ old('nama_mk') }}"><br><br>

        <label>SKS:</label><br>
        <input type="number" name="sks" min="1" max="6" value="{{ old('sks') }}"><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" min="1" max="8" value="{{ old('semester') }}"><br><br>

        <label>Dosen Pengampu:</label><br>
        <select name="dosen_id">
            <option value="">-- Pilih Dosen (opsional) --</option>
            @foreach ($dosens as $dosen)
                <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('matakuliah.index') }}">← Kembali ke Daftar</a>
</body>
</html>