<?php

//Escreva um programa que calcule o salário semanal de um trabalhador. As entradas são o número de horas trabalhadas na semana e o valor da hora. Até 40 h/semana não se acrescenta nenhum adicional. Acima de 40h e até 60h há um bônus de 50% para essas horas adicionais. Acima de 60h há um bônus de 100% para essas horas adicionais.// 

$horas = 50;
$valorHora = 20;

if ($horas <= 40) {
$salario = $horas * $valorHora;

} elseif ($horas <= 60) {
    $horasNormais = 40;
    $horasExtras = $horas - 40;
    $salario = ($horasNormais * $valorHora) + ($horasExtras * $valorHora * 1.50);

} else {
    $horasNormais = 40;
    $horas50 = 20;
    $horas100 = $horas - 60;

$salario = ($horasNormais * $valorHora) + ($horas50 * $valorHora * 1.50) + ($horas100 * $valorHora * 2);
}
echo ("Horas trabalhadas: $horas\n");
echo ("Valor da hora: R$ $valorHora\n");
echo ("Salário semanal: R$ $salario\n");
?>






?>