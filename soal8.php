<?php
function hitungGajiBersih($jumlahgaji, $denda_telat_perhari) {
    $totalDendaTelat = 0;
    
    for ($day = 1; $day <= 1; $day++) {
        $totalDendaTelat += $denda_telat_perhari;
    }
    
    $jumlahGajiPegawai = $jumlahgaji - $totalDendaTelat;
    
    echo "Total gaji: $jumlahgaji <br>";
    echo "denda telat per-hari: $denda_telat_perhari <br>";
    echo "total denda telat 1 hari: $totalDendaTelat <br>";
    echo "gaji alfian bulan ini adalah: $jumlahGajiPegawai <br>";
}


$jumlahgaji = 450000;
$denda_telat_perhari = 15000;


hitungGajiBersih($jumlahgaji, $denda_telat_perhari);
?>