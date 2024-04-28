<?php
// jarak antar kota dalam kilometer
$jarak = [
    'A-B' => 45,
    'B-C' => 51,
    'C-D' => 38,
    'D-E' => 104,
    'E-F' => 93,
];

// tingkat konsumsi bahan bakar dalam liter per kilometer
$konsumsiBahanBakar= 1/9;

$totaljarakAF = $jarak['A-B'] + $jarak['B-C'] + $jarak['C-D'] + $jarak['D-E'] + $jarak['E-F'];
$bahanBakarAF = $totaljarakAF * $konsumsiBahanBakar;


$jarakBE = $jarak['B-C'] + $jarak['C-D'] + $jarak['D-E'];
$bahanBakarBE = $jarakBE * $konsumsiBahanBakar;


$totaljarakAFB = $totaljarakAF + $jarak['E-F'] + $jarak['D-E'] + $jarak['C-D'] + $jarak['B-C'];
$KebutuhanBahanBakarAFB = $totaljarakAFB * $konsumsiBahanBakar;
?>

<!DOCTYPEhtml>
<htmllang="id">
<kepala>
<meta charset="UTF-8">
<meta name="viewport" content="width=lebar perangkat, skala awal=1.0">
<title>Penghitungan Konsumsi Bahan Bakar Mobil</title>
</kepala>
<tubuh>
<h1>Perhitungan Konsumsi Bahan Bakar Mobil</h1>
<p>Bahan bakar yang dibutuhkan dari Kota A ke F: <?php echo number_format($bahanBakarAF, 2); ?> liter</p>
<p>Bahan bakar yang dibutuhkan dari Kota B ke E: <?php echo number_format($bahanBakarBE, 2); ?> liter</p>
<p>Bahan bakar yang dibutuhkan dari Kota A ke F dan kembali ke Kota B: <?php echo number_format($KebutuhanBahanBakarAFB, 2); ?> liter</p>
</tubuh>
</html>