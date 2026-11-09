<?php
// Eksperimen Mandiri No. 2: Pencarian nama dari array sederhana menggunakan GET
$daftarNama = ["Andi", "Budi", "Siti", "Dewi", "Rian"];
$hasilCari = null;

if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    foreach ($daftarNama as$n) {
        if (strcasecmp($n,$kata) === 0) {
            $hasilCari =$n;
            break;
        }
    }
}
?>
<form method="GET" action="">
    <label for="kata">Cari Nama Mahasiswa:</label>
    <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($_GET["kata"] ?? "", ENT_QUOTES, "UTF-8") ?>">
    <button type="submit">Cari</button>
</form>

<?php
if (isset($_GET["kata"])) {
    echo "<p>Kata kunci dicari: " . htmlspecialchars($_GET["kata"], ENT_QUOTES, "UTF-8") . "</p>";
    if ($hasilCari !== null) {
        echo "<p style='color: green;'>Status: Nama <strong>" . htmlspecialchars($hasilCari, ENT_QUOTES, "UTF-8") . "</strong> ditemukan dalam database!</p>";
    } else {
        echo "<p style='color: red;'>Status: Nama tidak ditemukan.</p>";
    }
}
?>