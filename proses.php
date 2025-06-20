<?php
include 'config.php';

$nama  = $_POST['nama'];
$nomor = $_POST['nomor'];
$paket = $_POST['paket'];
$tanggal = date("Y-m-d H:i:s");

$sql = "INSERT INTO pesanan (nama, nomor, paket, tanggal)
        VALUES ('$nama', '$nomor', '$paket', '$tanggal')";

if ($conn->query($sql) === TRUE) {
    echo "Pesanan berhasil disimpan! Silakan tunggu konfirmasi.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
