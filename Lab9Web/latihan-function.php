<?php require_once __DIR__ . '/helpers/functions.php'; ?>
<?php require_once __DIR__ . '/header.php'; ?>
<section class="content"><h2>Latihan Function</h2>
<p>25 Celsius = <?= konversiCelciusKeFahrenheit(25) ?> Fahrenheit</p>
<p>Nilai 85: <?= e(tentukanStatusNilai(85)) ?></p>
<p>Belanja Rp20.000 x 3 = <?= e(formatRupiah(hitungTotal(20000,3))) ?></p>
<p>Luas 8 x 5 = <?= hitungLuasPersegiPanjang(8,5) ?></p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
