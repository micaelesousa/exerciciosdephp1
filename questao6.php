<?php

// Faça um programa que lê duas notas parciais, calcule a média e aplique um conceito: A (9 a 10), B (7.5 a 9), C (6 a 7.5), D (4 a 6) e E (0 a 4). Imprima as notas, a média, o conceito e a mensagem “APROVADO” (se A, B ou C) ou “REPROVADO” (se D ou E). //

$notaparcial = 7;
$notabimestral = 0;

$soma = $notaparcial + $notabimestral;
$media = $soma / 2;
 
if ($media >= 9 ){
    $condicao = "Aprovado";
    $conceito = "A"; 
}
   
elseif ($media >= 7.5 ){
    $condicao = "Aprovado";
    $conceito = "B";
}
elseif ($media >= 6  ){
    $condicao = "Aprovado";
    $conceito = "C";
}

elseif ($media >= 4 ){
    $condicao = "Reprovado";
    $conceito = "D";
}
else{
    $condicao = "Reprovado";
    $conceito = "E";
}

echo "NOTA PARCIAL: $notaparcial\nNOTA BIMESTRAL: $notabimestral\nMÉDIA: $media\nCONCEITO: $conceito\nSITUAÇÃO: $condicao";

?>