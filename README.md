## 1. Tujuan Praktikum

Praktikum ini bertujuan untuk memahami dan mempraktikkan konsep PHP Modular, meliputi:

- Penggunaan Include dan Require.
- Pembuatan template website.
- Penggunaan Function dan Helper.
- Pengaturan struktur folder modular.
- Pembuatan routing menggunakan whitelist.
- Penggunaan halaman 404.
- Pengenalan konfigurasi `.htaccess`.

## 2. Perangkat yang Digunakan

- XAMPP (Apache dan PHP).
- Visual Studio Code.
- Web Browser.
- MySQL (jika diperlukan untuk latihan lanjutan).

## 3. Struktur Folder Project

```text
Lab9Web/
│
├── assets/
│   └── css/
│
├── config/
│
├── helpers/
│   └── functions.php
│
├── views/
│
├── modules/
│   └── user/
│
├── screenshots/
│
├── pesan.php
├── uji-include.php
├── uji-require.php
├── header.php
├── footer.php
├── home.php
├── about.php
├── kontak.php
├── contoh-panggil.php
├── latihan-function.php
├── index.php
└── README.md
```

### Dokumentasi Struktur Folder

**Screenshot 01 – Struktur Folder Project**

<img width="235" height="450" alt="Screenshot 2026-11-25 181209" src="https://github.com/user-attachments/assets/a45a4cb5-8d5f-4970-a6b7-2af1faa5894b" />


## 4. Cara Menjalankan Project

1. Buka aplikasi XAMPP.
2. Aktifkan Apache dengan menekan tombol Start.
3. Simpan folder project di `C:\xampp\htdocs\Lab9Web`.
4. Buka Visual Studio Code.
5. Buka folder project Lab9Web.
6. Jalankan melalui browser menggunakan alamat berikut:

**Halaman Template**

`http://localhost/Lab9Web/home.php`

**Halaman Dashboard Router**

`http://localhost/Lab9Web/index.php`

---

## 5. Hasil Praktikum

### A. Include dan Require

Pada bagian ini dilakukan percobaan penggunaan include dan require untuk memanggil file PHP lainnya.

**1. Hasil Include**

<img width="953" height="498" alt="Screenshot 2026-11-25 175251" src="https://github.com/user-attachments/assets/8e6806f5-5d24-4bab-8b19-12bd4f037e0c" />


**2. Hasil Require**

<img width="953" height="492" alt="Screenshot 2026-11-25 180551" src="https://github.com/user-attachments/assets/0e1fe551-e333-4b7b-b198-935536a20953" />


### B. Template Website

Membuat template website menggunakan header, navigasi, konten, dan footer agar setiap halaman memiliki tampilan yang konsisten.

**1. Halaman Home**

<img width="953" height="500" alt="Screenshot 2026-11-25 175342" src="https://github.com/user-attachments/assets/508d87a8-6f76-4ee5-a12e-babb88116a7e" />


**2. Halaman About**

<img width="945" height="498" alt="Screenshot 2026-11-25 180717" src="https://github.com/user-attachments/assets/7f316a4b-30d9-4442-b701-05d9ca8b6a72" />

**3. Halaman Kontak**

<img width="952" height="505" alt="Screenshot 2026-11-25 180847" src="https://github.com/user-attachments/assets/b05c5a17-b535-4997-9e1b-765015432d3f" />


### C. Function

Membuat fungsi PHP agar kode dapat digunakan kembali dan lebih mudah dikelola.

Materi yang dipraktikkan:
- Function tanpa parameter.
- Function dengan parameter.
- Function dengan return.
- Konversi suhu Celcius.
- Predikat nilai.
- Perhitungan total belanja.

**Hasil Function**

<img width="951" height="494" alt="Screenshot 2026-11-25 180932" src="https://github.com/user-attachments/assets/c4d04f3c-0b82-4bd5-893c-aa78bf0bed4f" />

### D. Struktur Modular dan Routing

Membuat struktur folder modular dan routing untuk mengatur perpindahan halaman website menggunakan whitelist.

**1. Dashboard Router**

<img width="953" height="489" alt="Screenshot 2026-11-25 181257" src="https://github.com/user-attachments/assets/84b7e6e2-8e93-4cad-b608-bfe369514cf3" />

**2. Daftar Pengguna**

<img width="953" height="502" alt="Screenshot 2026-11-25 181353" src="https://github.com/user-attachments/assets/a95cf979-6ce5-4479-a37c-850b8c7aca8f" />

**3. Tambah Pengguna**

<img width="953" height="507" alt="Screenshot 2026-11-25 181432" src="https://github.com/user-attachments/assets/7ce1f485-61c9-4460-8451-3ec875cc2395" />

**4. Halaman 404**

<img width="949" height="490" alt="Screenshot 2026-11-25 181521" src="https://github.com/user-attachments/assets/bdf74eac-4e74-48ae-8a34-05c32f671271" />

## 6. Daftar Rute Website

| Halaman | URL |
|---|---|
| Dashboard | `index.php` |
| Daftar Pengguna | `index.php?page=user/list` |
| Tambah Pengguna | `index.php?page=user/add` |
| Edit Pengguna | `index.php?page=user/edit` |
| Halaman 404 | `index.php?page=halaman-tidak-ada` |

## 7. Kendala dan Solusi

| Kendala | Solusi |
|---|---|
| CSS tidak tampil | Periksa lokasi file CSS |
| Include gagal | Periksa nama dan lokasi file |
| Require error | Periksa file yang dipanggil |
| Function error | Periksa nama function |
| Routing tidak tampil | Periksa whitelist |
| Halaman 404 muncul | Periksa alamat URL |

## 8. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, saya memahami penggunaan PHP Modular untuk membuat program yang lebih terstruktur. Saya juga mempelajari penggunaan include, require, template, function, helper, dan routing whitelist. Dengan konsep tersebut, pengelolaan file program menjadi lebih mudah dan rapi.
