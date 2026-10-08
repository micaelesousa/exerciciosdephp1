<?php

//Faça um algoritmo que tenha os 3 lados de um triângulo. O script deverá informar se os valores formam um triângulo. Se formarem, diga se é: Equilátero (3 lados iguais), Isósceles (2 lados iguais) ou Escaleno (3 lados diferentes).//

$a = 45;
$b = 13;
$c = 14;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    if ($a == $b && $b == $c) {
        echo "É um triângulo Equilátero. (3 lados iguais)";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "É um triângulo Isósceles. (2 lados iguais)";
    } else {
        echo "É um triângulo Escaleno. (3 lados diferentes)";
    }

} else {
    echo "Os valores não formam um triângulo.";
}

?>