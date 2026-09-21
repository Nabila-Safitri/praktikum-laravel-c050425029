<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk'  => 'MK' . fake()->unique()->numerify('###'),
            'nama_mk'  => fake()->randomElement([
                'Pemrograman Berbasis Web',
                'Administrasi Basis Data',
                'Struktur Data',
                'Administrasi Jaringan',
                'Rekayasa Perangkat Lunak',
                'Dasar Pengembangan Sistem Informasi Kota Cerdas',
                'Pemrograman Berorientasi Objek',
                'Pemodelan Proses Bisnis',
            ]),

            'sks'      => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => null, 
        ];
    }
}
