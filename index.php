<?php
// variable harga setiap bahan
$Hargaterigu = 7500; // Rp per Kg
$hargagula = 9000; // Rp per Kg
$margarinHarga = 5000; // Rp per bungkus
$hargatelur = 20000; // Rp per Kg
$hargaminyak = 11000; // Rp per Liter

// variable jumlah masing-masing bahan
$TepungTeriguQty = 2.5; //Kg
$gulaQty = 1.5; //Kg
$margarineQty = 2; // paket
$telurJumlah = 0.5; //Kg
$minyakQty = 2; // Liter

// Tentukan jumlah donat yang diproduksi
$jumlahDonat = 50;

// Tentukan harga jual setiap donat
$hargajualPerDonut = 2000; // Rp

// Hitung total biaya bahan
$totalCost = ($Hargaterigu * $TepungTeriguQty) + ($hargagula * $gulaQty) + ($margarinHarga * $margarineQty) + ($hargatelur * $telurJumlah) + ($hargaminyak * $minyakQty);

// Hitung total pendapatan dari penjualan semua donat
$totalPendapatan = $jumlahDonat * $hargajualPerDonut;

// Hitung keuntungannya
$keuntungan = $totalPendapatan - $totalCost;
?>

<!DOCTYPEhtml>
<htmllang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=lebar perangkat, skala awal=1.0">
    <title>Perhitungan Keuntungan Donat Nina</title>
</head>
<body>
    <h1>Perhitungan Keuntungan Donat Nina</h1>
    <p>Total Biaya: Rp <?php echo number_format($totalCost, 2); ?></p>
    <p>Total Pendapatan: Rp <?php echo number_format($totalPendapatan, 2); ?></p>
    <p>Keuntungan: Rp <?php echo number_format($keuntungan, 2); ?></p>
</body>
</html>