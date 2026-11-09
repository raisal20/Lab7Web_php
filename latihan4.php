<?php
// Eksperimen Mandiri No. 3: Function untuk mengubah format harga menjadi Rupiah
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

function hitungDiskon($harga, $persen) {$potongan = $harga * ($persen / 100);
    return $harga -$potongan;
}

$hargaAwal = 150000;
$hargaAkhir = hitungDiskon($hargaAwal, 10);

echo "Harga awal: " . formatRupiah($hargaAwal) . "<br>";
echo "Harga setelah diskon: " . formatRupiah($hargaAkhir);
?>