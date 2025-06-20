<!DOCTYPE html>
<html>
<head>
  <title>Pesan Bot WA</title>
</head>
<body>
  <h2>Form Pemesanan Bot WhatsApp</h2>
  <form action="proses.php" method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Nomor WA: <input type="text" name="nomor" required><br><br>
    Paket:
    <select name="paket" required>
      <option value="Basic">Basic - Rp10.000</option>
      <option value="Pro">Pro - Rp25.000</option>
      <option value="Premium">Premium - Rp50.000</option>
    </select><br><br>
    <button type="submit">Pesan Sekarang</button>
  </form>
</body>
</html>
