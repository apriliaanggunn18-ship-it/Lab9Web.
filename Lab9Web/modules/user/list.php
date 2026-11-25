<?php
if (!isset($_SESSION['users'])) $_SESSION['users'] = ['Anggun','Rina'];
?>
<section class="content"><h2>Daftar Pengguna (Demo Session)</h2>
<p>Ini contoh daftar pengguna sederhana untuk menguji router, bukan CRUD database dari Praktikum 8.</p>
<ul><?php foreach($_SESSION['users'] as $nama): ?><li><?= e($nama) ?></li><?php endforeach; ?></ul>
<a class="button" href="index.php?page=user/add">Tambah Pengguna</a></section>
