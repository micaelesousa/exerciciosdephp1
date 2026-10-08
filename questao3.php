<?php

// Faça um script em PHP que leia três números e mostre-os em ordem decrescente.//

$a = 27;
$b = 21;
$c = 16;

if ($a >= $b && $a >= $c) {
    if ($b >= $c) {
        echo "$a, $b, $c";
    } else {
        echo "$a, $c, $b";
    }
} elseif ($b >= $a && $b >= $c) {
    if ($a >= $c) {
        echo "$b, $a, $c";
    } else {
        echo "$b, $c, $a";
    }
} else {
    if ($a >= $b) {
        echo "$c, $a, $b";
    } else {
        echo "$c, $b, $a";
    }
}

?>