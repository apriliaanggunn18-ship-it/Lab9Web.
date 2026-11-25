# Lab9Web — Praktikum 9 PHP Modular

## Tujuan
Mempraktikkan include/require, template bersama, function/helper, struktur modular dan routing menggunakan whitelist.

## Perangkat
- XAMPP (Apache dan PHP)
- Visual Studio Code
- Browser

## Cara menjalankan
1. Ekstrak folder `Lab9Web` ke `C:\xampp\htdocs`.
2. Buka XAMPP Control Panel, Start Apache.
3. Buka `http://localhost/Lab9Web/home.php` untuk latihan template.
4. Buka `http://localhost/Lab9Web/index.php` untuk dashboard router.
5. Jika halaman tidak terbuka, periksa nama folder dan Apache.

## Struktur
- `pesan.php`, `uji-include.php`, `uji-require.php`: latihan C.
- `header.php`, `footer.php`, `home.php`, `about.php`, `kontak.php`: latihan D.
- `helpers/functions.php`, `contoh-panggil.php`, `latihan-function.php`: latihan E/J.
- `views/`, `modules/user/`, `index.php`: latihan F/G.
- `.htaccess`: latihan H (opsional).
- `config/`: tempat konfigurasi database saat integrasi CRUD praktikum sebelumnya.

## Daftar rute
- `index.php` — dashboard.
- `index.php?page=user/list` — daftar demo pengguna.
- `index.php?page=user/add` — form demo tambah pengguna.
- `index.php?page=user/edit` — contoh halaman edit.
- `index.php?page=halaman-tidak-ada` — halaman 404.

## Langkah praktikum
### C. Include dan require
1. Buka `pesan.php` dan `uji-include.php`.
2. Jalankan `http://localhost/Lab9Web/uji-include.php`.
3. Amati teks sebelum, isi file, dan sesudah include.
4. Uji require pada `uji-require.php`.
5. Untuk mengamati file hilang, lakukan sementara rename `pesan.php` lalu uji include/require. Kembalikan nama file setelah selesai.

### D. Template
1. Buka `header.php`, `footer.php`, `home.php`, `about.php`, `kontak.php`, dan `assets/css/style.css`.
2. Jalankan `home.php`, `about.php`, dan `kontak.php`.
3. Bandingkan header, navigasi, footer yang sama dengan isi halaman berbeda.

### E. Function
1. Buka `helpers/functions.php`.
2. Perhatikan function tanpa parameter/return, function dengan parameter, dan function yang mengembalikan nilai.
3. Jalankan `contoh-panggil.php` dan `latihan-function.php`.
4. Function latihan: konversi Celcius, predikat nilai, total belanja.

### F–G. Struktur dan router
1. Periksa folder `config`, `views`, `helpers`, `modules`, dan `assets`.
2. Jalankan `index.php`.
3. Uji rute daftar dan tambah pengguna.
4. Uji parameter rute yang tidak terdaftar untuk melihat halaman 404.

### H. .htaccess (opsional)
1. Pastikan Apache mendukung mod_rewrite.
2. Uji URL rewrite setelah konfigurasi Apache mendukungnya. Jika belum, tetap gunakan query `index.php?page=...`.

### I. Integrasi CRUD Praktikum 8
1. Salin project CRUD Praktikum 8 ke project terpisah (jangan mengubah project asli).
2. Pindahkan koneksi database ke `config/database.php`.
3. Pindahkan template ke `views/header.php` dan `views/footer.php`.
4. Pindahkan function umum ke `helpers/functions.php`.
5. Pindahkan file CRUD ke `modules/user/`.
6. Daftarkan rute CRUD pada `index.php`.
7. Uji tambah, tampil, ubah, dan hapus data. Demo session pada project ini bukan pengganti CRUD database.

### J. Latihan
- Latihan 1: template multi-halaman.
- Latihan 2: helper `formatRupiah`, `hitungDiskon`, `validasiEmail`, `ringkasTeks`.
- Latihan 3: router whitelist dan halaman 404.
- Latihan 4: refactoring CRUD Praktikum 8 (perlu project CRUD sebelumnya).

## Screenshot laporan
Ambil screenshot struktur folder, include/require, template, function, routing, 404, serta CRUD database setelah integrasi. Simpan di folder `screenshots`.

## Kendala dan solusi
- CSS tidak tampil: periksa path stylesheet.
- File include gagal: periksa nama/path file.
- Function dideklarasikan dua kali: gunakan `require_once`.
- Rute tidak tampil: cek daftar whitelist.
- CRUD database belum terintegrasi: gunakan project Praktikum 8 sebagai sumber file.

## Repository
Buat repository GitHub bernama `Lab9Web`, tambahkan file project dan screenshot, commit, lalu kirim URL sesuai instruksi dosen.
