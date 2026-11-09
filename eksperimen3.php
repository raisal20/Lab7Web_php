
<?php
function formatRupiah($harga) {
    return "Rp" . number_format($harga, 0, ",", ".");
}

$hasil = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $harga = $_POST["harga"] ?? "";

    if ($harga === "" || !is_numeric($harga) || $harga < 0) {
        $error = "Masukkan harga yang valid.";
    } else {
        $hasil = formatRupiah((float)$harga);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 3 - Format Rupiah</title>
</head>
<body>

<h2>Konversi Format Harga Rupiah</h2>

<form method="POST">
    <label>Masukkan Harga:</label><br>
    <input type="number" name="harga" min="0" required><br><br>

    <button type="submit">Ubah Format</button>
</form>

<?php if (isset($error)): ?>
    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>
<?php endif; ?>

<?php if ($hasil !== null): ?>
    <h3>Hasil Konversi</h3>
    <p>Harga dalam Rupiah: <strong><?= $hasil ?></strong></p>
<?php endif; ?>

</body>
</html>
