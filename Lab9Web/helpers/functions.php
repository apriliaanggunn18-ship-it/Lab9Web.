<?php
function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}
function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}
function hitungDiskon(float $harga, float $persen = 10): float {
    return $harga * ($persen / 100);
}
function validasiEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function ringkasTeks(string $teks, int $maksimal = 40): string {
    if (strlen($teks) <= $maksimal) return $teks;
    return substr($teks, 0, $maksimal) . '...';
}
function konversiCelciusKeFahrenheit(float $c): float {
    return ($c * 9 / 5) + 32;
}
function tentukanStatusNilai(float $nilai): string {
    if ($nilai >= 80) return 'A';
    if ($nilai >= 70) return 'B';
    if ($nilai >= 60) return 'C';
    if ($nilai >= 50) return 'D';
    return 'E';
}
function hitungTotal(float $harga, int $jumlah): float {
    return $harga * $jumlah;
}
function hitungLuasPersegiPanjang(float $panjang, float $lebar): float {
    return $panjang * $lebar;
}
function sapaPengguna(string $nama): string {
    return 'Halo, ' . e($nama);
}
?>
