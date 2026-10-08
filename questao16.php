<?php

/* Classificação de personagem: Em um jogo, os personagens possuem três atributos: força, inteligência e agilidade. Faça um script em PHP que receba os três atributos e determine a classe do personagem:
    1 - Se a força for o maior atributo: Guerreiro
    2 - Se a inteligência for o maior atributo: Mago
    3 - Se a agilidade for o maior atributo: Arqueiro
    4 - Se houver empate entre dois ou mais atributos: Classe híbrida 
Exiba os três atributos e a classe escolhida.*/

$forca = 80;
$inteligencia = 50;
$agilidade = 60;

if ($forca == $inteligencia || $forca == $agilidade || $inteligencia == $agilidade) {
    echo "Classe híbrida.";
} elseif ($forca > $inteligencia && $forca > $agilidade) {
    echo "Guerreiro.";
} elseif ($inteligencia > $forca && $inteligencia > $agilidade) {
    echo "Mago.";
} elseif ($agilidade > $forca && $agilidade > $inteligencia) {
    echo "Arqueiro.";
}

?>