
<?php
$hasil = null;

if ($_SERVER["REQUEST_METHOD"] === "POST"
    && isset($_POST["kirim"])) {

    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "" || $prodi === "") {
        $error = "Semua kolom wajib diisi.";
    } else {
        $hasil = [
            "nama" => $nama,
            "prodi" => $prodi
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 5 - Tombol Reset</title>
</head>
<body>

<h2>Form Data Mahasiswa</h2>

<form method="POST" action="">
    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Program Studi:</label><br>
    <input type="text" name="prodi"><br><br>

    <button type="submit" name="kirim">
        Kirim Data
    </button>

    <button type="reset">
        Reset Form
    </button>
</form>

<?php if (isset($error)): ?>
    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>
<?php endif; ?>

<?php if ($hasil !== null): ?>
    <h3>Data Berhasil Dikirim</h3>
    <p>Nama: <?= htmlspecialchars($hasil["nama"]) ?></p>
    <p>Program Studi: <?= htmlspecialchars($hasil["prodi"]) ?></p>
<?php endif; ?>

</body>
</html>
