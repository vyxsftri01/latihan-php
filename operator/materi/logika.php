<?php

$a = true;
$b = false;

//variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

//variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b" , $a,$b,$c);
echo "<hr>";

//variabel $c akan bernilai false
$c = !$c;
printf("!%b = %b", $a, $c);
echo "<hr>";

?>