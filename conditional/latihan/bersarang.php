<?php
$nama ="budi";
$status = "Manager";
$keluarga = "5";

echo "Nama Pekerja :".$nama."<br>";
echo "status :".$status."<br>";

echo "<hr>";

if($status == "Manager"){
    $gaji = 4500000;
    echo "Gaji Kotor:".$gaji."<br>";
    $trans = 50000;
    $lembur = 50000;
    $jam = 45;
    echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : ".$bpjs. "<br>";
$pajak = 0.025 * $gaji;
echo "Pajak : ".$pajak."<br>";
$potongan = $bpjs + $pajak;
echo "Jumlah Potongan :".$potongan."<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan :".$tunjangan."<br>";
$ul = $lembur * $jam;
echo "Uang Lembur :".$ul."<br>";
$ut = $trans * 24 ;
echo "Uang Transportasi : ".$ut."<br>";
$bonus = $tunjangan + $ul + $ut;
echo "Jumlah Bonus :".$bonus."<br>";

echo "<hr>";

$gb = $gaji - $potongan + $bonus;
echo "Gaji Bersih :".$gb."<br>";
}
elseif($status == "Sekretaris"){
    $gaji = 3500000;
    echo "Gaji Kotor:".$gaji."<br>";
    $trans = 35000;
    $lembur = 45000;
    $jam = 35;
    echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : ".$bpjs. "<br>";
$pajak = 0.025 * $gaji;
echo "Pajak : ".$pajak."<br>";
$potongan = $bpjs + $pajak;
echo "Jumlah Potongan :".$potongan."<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan :".$tunjangan."<br>";
$ul = $lembur * $jam;
echo "Uang Lembur :".$ul."<br>";
$ut = $trans * 24 ;
echo "Uang Transportasi : ".$ut."<br>";
$bonus = $tunjangan + $ul + $ut;
echo "Jumlah Bonus :".$bonus."<br>";

echo "<hr>";

$gb = $gaji - $potongan + $bonus;
echo "Gaji Bersih :".$gb."<br>";
}
elseif($status == "Staff"){
    $gaji = 3000000;
    echo "Gaji Kotor:".$gaji."<br>";
    $lembur = 30000;
    $jam = 25;
    $ul = $lembur * $jam;
    echo "Uang Lembur :".$ul."<br>";
}
elseif($status == "Karyawan"){
    $gaji = 2800000;
    echo "Gaji Kotor:".$gaji."<br>";
    $lembur =25000;
    $jam = 20;
    $ul = $lembur * $jam;
    echo "Uang Lembur :".$ul."<br>";
}
else{
    echo "Status Tidak Tersedia!";
}