<?php

$gk = 4500000;
$bpjs = 200000;
$infak = 50000;
$pjk = 112500;
$n = 10000;
$h = 24;

$bonus = $n * $h ;
$potongan = $pjk + $bpjs + $infak;
$pokok = $gk - $potongan ;
$pkk = $pokok + $bonus;

echo "GAJI KOTOR : " . $gk . "<br>";
echo "POTONGAN : " . $potongan . "<br>"; 
echo "BONUS : " . $bonus . "<br>"; 
echo "GAJI BERSIH : " . $pkk . "<br>"; 



