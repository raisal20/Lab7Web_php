

<?php
$hasil = null;
$nim = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");

    if ($nim === "") {
        $error = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $error = "NIM hanya boleh berisi angka.";
    } elseif (strlen($nim) !== 9) {
        $error = "NIM harus terdiri dari 9 digit angka.";
    } else {
        $hasil = "NIM valid: " . $nim;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 4 - Validasi NIM</title>
</head>
<body>

<h2>Form Validasi NIM</h2>

<form method="POST">
    <label>Masukkan NIM:</label><br>
    <input
        type="text"
        name="nim"
        maxlength="9"
        value="<?= htmlspecialchars($nim) ?>"
        required
    ><br><br>

    <button type="submit">Periksa NIM</button>
</form>

<?php if (isset($error)): ?>
    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>
<?php endif; ?>

<?php if ($hasil !== null): ?>
    <p style="color:green;">
        <?= htmlspecialchars($hasil) ?>
    </p>
<?php endif; ?>

</body>
</html>
