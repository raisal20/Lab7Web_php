<?php
$hasil = null;
$error = null;
$barang = "";
$hargaInput = "";
$jumlahInput = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";
    
    // Perbaikan operator || di baris ini
    if ($barang === "" || !is_numeric($hargaInput) || !ctype_digit((string)$jumlahInput) || (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Pengolahan Data</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nama barang: <input name="barang" value="<?= htmlspecialchars($barang, ENT_QUOTES, "UTF-8") ?>" required></label><br><br>
        <label>Harga: <input name="harga" type="number" min="0" step="0.01" value="<?= htmlspecialchars($hargaInput, ENT_QUOTES, "UTF-8") ?>" required></label><br><br>
        <label>Jumlah: <input name="jumlah" type="number" min="1" step="1" value="<?= htmlspecialchars($jumlahInput, ENT_QUOTES, "UTF-8") ?>" required></label><br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>" . htmlspecialchars($error) . "</p>";
    } elseif (isset($subtotal)) {
        echo "<p>Barang: " . htmlspecialchars($barang, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
    }
    ?>
</body>
</html>