<?php require_once __DIR__ . '/helpers/functions.php'; ?>
<?php require_once __DIR__ . '/header.php'; ?>
<section class="content"><h2>Contoh Helper</h2>
<p>Harga: <?= e(formatRupiah(150000)) ?></p>
<p>Diskon 10%: <?= e(formatRupiah(hitungDiskon(200000))) ?></p>
<p>Email valid: <?= validasiEmail('contoh@email.com') ? 'Ya' : 'Tidak' ?></p>
<p>Ringkas teks: <?= e(ringkasTeks('Contoh kalimat panjang untuk latihan helper PHP modular', 25)) ?></p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
