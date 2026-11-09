<?php
$data = null;
$error = [];
$nama = "";
$nim = "";
$prodi = "";
$semesterInput = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }
    
    // Validasi NIM (harus angka dan tepat 9 digit)
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
        $error[] = "NIM harus berupa angka dan harus tepat 9 digit.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    
    // Perbaikan error di baris ini (menggunakan operator || yang benar)
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka bulat antara 1 sampai 14.";
    }

    if (empty($error)) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background: #f9f9f9; }
        .box { max-width: 500px; background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        .error { background: #ffe6e6; color: #c00; padding: 10px; margin-bottom: 15px; border-left: 4px solid red; }
        .success { background: #e6ffed; color: #090; padding: 15px; margin-top: 15px; border-left: 4px solid green; }
        input { width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 12px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px 15px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button[type="reset"] { background: #6c757d; margin-left: 5px; }
    </style>
</head>
<body>
<div class="box">
    <h2>Formulir Data Mahasiswa</h2>
    <?php if (!empty($error)): ?>
        <div class="error">
            <strong>Perhatian:</strong>
            <?php foreach ($error as $err): ?>
                <div>- <?= htmlspecialchars($err, ENT_QUOTES, "UTF-8") ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?>" required>

        <label>NIM (9 Digit Angka):</label>
        <input type="text" name="nim" value="<?= htmlspecialchars($nim, ENT_QUOTES, "UTF-8") ?>" required>

        <label>Program Studi:</label>
        <input type="text" name="prodi" value="<?= htmlspecialchars($prodi, ENT_QUOTES, "UTF-8") ?>" required>

        <label>Semester (1–14):</label>
        <input type="number" name="semester" min="1" max="14" value="<?= htmlspecialchars($semesterInput, ENT_QUOTES, "UTF-8") ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?>" required>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php if ($data !== null): ?>
        <div class="success">
            <h3 style="margin-top:0;">Data Berhasil Disimpan!</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Prodi:</strong> <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Semester:</strong> <?= $data["semester"] ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>