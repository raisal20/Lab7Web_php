
<?php
$mahasiswa = [
    "Alya",
    "Bima",
    "Citra",
    "Doni",
    "Eko",
    "Fajar",
    "Gita"
];

$hasil = null;

if (isset($_GET["nama"])) {
    $cari = trim($_GET["nama"]);

    foreach ($mahasiswa as $nama) {
        if (strcasecmp($nama, $cari) === 0) {
            $hasil = $nama;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 2 - Pencarian Nama</title>
</head>
<body>

<h2>Pencarian Nama Mahasiswa</h2>

<form method="GET">
    <label>Masukkan Nama:</label><br>
    <input type="text" name="nama" required>
    <button type="submit">Cari</button>
</form>

<?php if (isset($_GET["nama"])): ?>
    <h3>Hasil Pencarian</h3>

    <?php if ($hasil !== null): ?>
        <p style="color:green;">
            Nama ditemukan: <?= htmlspecialchars($hasil) ?>
        </p>
    <?php else: ?>
        <p style="color:red;">Nama tidak ditemukan.</p>
    <?php endif; ?>

<?php endif; ?>

<h3>Daftar Mahasiswa</h3>
<ol>
    <?php foreach ($mahasiswa as $nama): ?>
        <li><?= htmlspecialchars($nama) ?></li>
    <?php endforeach; ?>
</ol>

</body>
</html>
