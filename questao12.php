<?php

/* O IMC – Índice de Massa Corporal é um critério da Organização Mundial de Saúde para dar uma indicação sobre a condição de peso de uma pessoa adulta. A fórmula é IMC = peso / ( altura )². Elabore um programa que leia o peso e a altura de um adulto e mostre sua condição de acordo com a tabela abaixo. 
    IMC em adultos Condição
    Abaixo de 18,5 Abaixo do peso
    Entre 18,5 e 25 Peso normal
    Entre 25 e 30 Acima do peso
    Entre 30 e 40 Obeso
    Acima de 40 Obesidade grave */

$peso=42;
$altura=1.59;
$imc=$peso / ($altura * $altura);

if ($imc <= 18.5) {
    echo"IMC: $imc - Você está Abaixo do Peso";
}

else if ($imc>=25 && $imc<30){                
    echo"IMC: $imc - Você está Acima do Peso";
}

else if ($imc>=30 && $imc<40) {
    echo"IMC: $imc - Você está Obeso";
}

else {
   echo"IMC: $imc - Você está com Obesidade Grave!";
}







?>