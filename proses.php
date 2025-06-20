<?php
// Ambil data dari form
$nomor = $_POST['nomor'];
$provider = $_POST['provider'];
$nominal = $_POST['nominal'];

// Simulasi proses (nanti bisa diganti API request)
echo "<h2>Transaksi Berhasil!</h2>";
echo "<p>Nomor: <strong>$nomor</strong></p>";
echo "<p>Provider: <strong>$provider</strong></p>";
echo "<p>Nominal: <strong>Rp " . number_format($nominal, 0, ',', '.') . "</strong></p>";
echo "<a href='index.html'>Kembali</a>";
?>
