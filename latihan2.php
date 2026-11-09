<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;

// Eksperimen Mandiri No. 1: Hitung nilai rata-rata dari tiga komponen nilai
$nilaiRataRata = ($tugas + $uts +$uas) / 3;

// Perhitungan nilai akhir sesuai modul
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {$predikat = "A";
} elseif ($nilaiAkhir >= 75) {$predikat = "B";
} elseif ($nilaiAkhir >= 60) {$predikat = "C";
} else {
    $predikat = "D";
}

echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
echo "Nilai Rata-rata: " . number_format($nilaiRataRata, 2) . "<br>";
echo "Nilai Akhir: " . number_format($nilaiAkhir, 2) . "<br>";
echo "Predikat: " . $predikat;
?>