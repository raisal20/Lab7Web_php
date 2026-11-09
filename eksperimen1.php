
<?php
$hasil = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tugas = $_POST["tugas"] ?? "";
    $uts = $_POST["uts"] ?? "";
    $uas = $_POST["uas"] ?? "";

    if (!is_numeric($tugas) || !is_numeric($uts) || !is_numeric($uas)) {
        $error = "Semua nilai harus berupa angka.";
    } elseif (
        $tugas < 0 || $tugas > 100 ||
        $uts < 0 || $uts > 100 ||
        $uas < 0 || $uas > 100
    ) {
        $error = "Nilai harus berada antara 0 sampai 100.";
    } else {
        $rataRata = ($tugas + $uts + $uas) / 3;
        $hasil = number_format($rataRata, 2);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1 - Nilai Rata-rata</title>
</head>
<body>

<h2>Menghitung Nilai Rata-rata</h2>

<form method="POST">
    <label>Nilai Tugas:</label><br>
    <input type="number" name="tugas" min="0" max="100" required><br><br>

    <label>Nilai UTS:</label><br>
    <input type="number" name="uts" min="0" max="100" required><br><br>

    <label>Nilai UAS:</label><br>
    <input type="number" name="uas" min="0" max="100" required><br><br>

    <button type="submit">Hitung Rata-rata</button>
</form>

<?php if (isset($error)): ?>
    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>
<?php endif; ?>

<?php if ($hasil !== null): ?>
    <h3>Hasil Perhitungan</h3>
    <p>Nilai Rata-rata: <?= $hasil ?></p>
<?php endif; ?>

</body>
</html>
