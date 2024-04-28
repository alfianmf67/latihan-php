<?php

$panjang_ruangan = 3; 
$lebar_ruangan = 4; 

// Dimensions of the door
$panjang_pintu = 1; 
$lebar_pintu = 2; 


$panjang_jendela = 1; 
$lebar_jendela = 1; 


$area_ruangan = 2 * ($panjang_ruangan + $lebar_ruangan); 
$area_pintu = $panjang_pintu * $lebar_pintu; 
$area_jendela = $panjang_jendela * $lebar_jendela; 
$tembok_untuk_dicat = $area_ruangan - ($area_pintu + $area_jendela); 


$cat_per_mtg = 25000; 
$total_biaya = $tembok_untuk_dicat * $cat_per_mtg; 

echo "Area of the walls to be painted: " . $tembok_untuk_dicat . " sqm<br>";
echo "Overall cost for painting the walls: IDR " . number_format($total_biaya, 2);
?>