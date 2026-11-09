<?php
// Ditambahkan minimal 3 nama mahasiswa baru sesuai instruksi modul
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eko", "Fajar", "Gita"];
echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as$nama) {
    echo "<li>" . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "</li>";
}
echo "</ol>";
?>