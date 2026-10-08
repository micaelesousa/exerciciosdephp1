<?php

/* As Empresas Israely’s resolveram dar um aumento de salário aos seus colaboradores. Faça um script que recebe o salário atual e calcula o reajuste:
    1 - Salários até R$ 280,00 (incluindo): aumento de 20%
    2 - Salários entre R$ 280,00 e R$ 700,00: aumento de 15%
    3 - Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%
    4 - Salários de R$ 1500,00 em diante: aumento de 5%
Após o cálculo, exiba o salário anterior, o percentual aplicado, o valor do aumento e o novo salário. */

$salario = 1618;

if ($salario <= 280) {
    $porcento = 20;
} elseif ($salario <= 700) {
    $porcento = 15;
} elseif ($salario <= 1500) {
    $porcento = 10;
} else {
    $porcento = 5;
}

$reajuste = $salario * $porcento / 100;
$novosalario = $salario + $reajuste;

echo "SEU SALÁRIO: $salario\n";
echo "PERCENTUAL APLICADO: $porcento\n";
echo "VALOR DO AUMENTO: $reajuste\n";
echo "NOVO SALÁRIO: $novosalario\n";
?>