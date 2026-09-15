# Praktikum Laravel - C050425029

## Deskripsi
Proyek ini merupakan tugas praktikum mata kuliah Pemrograman Berbasis Web pada Program Studi Sarjana Terapan Sistem Informasi Kota Cerdas (SIKC), Jurusan Teknik Elektro, Politeknik Negeri Banjarmasin. Aplikasi dibangun menggunakan framework Laravel sebagai latihan penerapan konsep MVC, routing, migration, dan version control (Git).

## Teknologi yang Digunakan
- PHP
- Laravel
- MySQL / MariaDB
- Node.js & NPM (untuk asset frontend)
- Composer

## Cara Menjalankan Proyek

1. Clone repository ini:
```bash
   git clone <url-repo-anda>
   cd praktikum-laravel-C050425029
```

2. Install dependency PHP:
```bash
   composer install
```

3. Install dependency JavaScript:
```bash
   npm install
```

4. Salin file environment dan sesuaikan konfigurasi database:
```bash
   cp .env.example .env
```

5. Generate application key:
```bash
   php artisan key:generate
```

6. Buat database sesuai nama di `.env`, lalu jalankan migrasi ulang beserta seeder:
```bash
   php artisan migrate:fresh --seed
```

7. Jalankan build asset frontend:
```bash
   npm run dev
```

8. Jalankan server Laravel:
```bash
   php artisan serve
```

9. Buka browser dan akses:
   http://localhost:8000