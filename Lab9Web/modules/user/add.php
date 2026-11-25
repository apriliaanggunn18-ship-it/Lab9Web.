<?php
if (!isset($_SESSION['users'])) $_SESSION['users'] = ['Anggun','Rina'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $nama = trim($_POST['nama'] ?? '');
 if ($nama !== '') { $_SESSION['users'][] = $nama; header('Location: index.php?page=user/list'); exit; }
}
?>
<section class="content"><h2>Tambah Pengguna (Demo Session)</h2>
<form method="post"><label>Nama</label><input type="text" name="nama" required><button type="submit">Simpan</button></form>
<p><a href="index.php?page=user/list">Kembali ke daftar</a></p></section>
