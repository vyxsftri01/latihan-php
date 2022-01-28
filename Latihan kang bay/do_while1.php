<?php
echo "<h3>Perulangan do_while 1</h3>";
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</P>";
    $ulangi--;
}while ($ulangi > 0);

$ulangi = 0;

     echo "<br>";
     echo "<h3>Perulangan do_while 2</h3>";

do {
    echo "<p>ini adalah perulangan ke-$ulangi</P>";
    $ulangi++;
}while ($ulangi <=10);

echo "<br>";
     echo "<h3>Perulangan do_while 3</h3>";

     $ulangi = 0;

do {
    echo "<p>umur saya 17 th</P>";
    echo "Kelas 11</P>";
    $ulangi++;
}while ($ulangi < 2);
?>

