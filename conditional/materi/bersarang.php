<?php

$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Selamat datang pak/bu!";
    } else {
        echo "Halo selamat datang!";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}
?>