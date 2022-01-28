<?php

echo "<h3>Perulangan while ke-1</h3>";
$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

echo "<h3>Perulangan while ke-2</h3>";
$ulangi = 1;
while($ulangi <=5){
    $a = 1;
    while($a <= $ulangi){
        $n=$ulangi*$a;
        echo "* &nbsp";
        $a++;
    }
    echo "<br>";
    $ulangi++;
}

echo "<h3>Perulangan while ke-3</h3>";
$ulangi = 0;

while($ulangi <5){
    echo "<p>Hai!Nama aku nopi:)</p>";
    $ulangi++;
}
?>