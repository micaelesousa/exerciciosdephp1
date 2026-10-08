<?php

// Faça um algoritmo que leia três números inteiros, em seguida mostre o maior e menor deles. //

$a = 14;
$b = 55;
$c = 30;

if ($a >= $b && $a >= $c) {
    echo "Maior: $a\n";
} elseif ($b >= $a && $b >= $c) {
    echo "Maior: $b\n";
} else {
    echo "Maior: $c\n";
}


if ($a <= $b && $a <= $c) {
    echo "Menor: $a";
} elseif ($b <= $a && $b <= $c) {
    echo "Menor: $b";
} else {
    echo "Menor: $c";
}

?>