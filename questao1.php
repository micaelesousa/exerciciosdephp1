<?php

// Faça um algoritmo que leia três números inteiros e mostre eles na ordem crescente. //

$a = 13;
$b = 22;
$c = 70;

if ($a <= $b && $a <= $c) {
    if ($b <= $c) {
        echo "$a, $b, $c";
    } else {
        echo "$a, $c, $b";
    }
} elseif ($b <= $a && $b <= $c) {
    if ($a <= $c) {
        echo "$b, $a, $c";
    } else {
        echo "$b, $c, $a";
    }
} else {
    if ($a <= $b) {
        echo "$c, $a, $b";
    } else {
        echo "$c, $b, $a";
    }
}

?>