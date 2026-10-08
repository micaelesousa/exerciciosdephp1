<?php

/* Faça um script para o cálculo de uma folha de pagamento. O script deve  ter o valor da sua hora e a quantidade de horas trabalhadas no mês. Considere: FGTS (11% do bruto, NÃO descontado), Sindicato (3% do bruto, descontado), e o IR (Imposto de Renda) que varia:
  1 - Salário Bruto até 900 (inclusive) - isento do imposto de renda
  2 - Salário Bruto até 1500 (inclusive) - desconto de 5%
  3 - Salário Bruto até 2500 (inclusive) - desconto de 10%
  4 - Salário Bruto acima de 2500 - desconto de 20%
Imprima o resumo demonstrativo listando Bruto, Descontos detalhados e o Salário Líquido.*/

$hora = 37;
$mes = 168;
$salario = $hora * $mes;
$fgts = $salario * 11 / 100;
$desv = $salario * 3 / 100;

if ($salario <= 900) {
    $porcento = 0;
} elseif ($salario <= 1500) {
    $porcento = 5;
} elseif ($salario <= 2500) {
    $porcento = 10;
} else {
    $porcento = 20;
}

$ir = $salario * $porcento / 100;
$sindicato = $salario - $desv;
$novosalario = $sindicato - $ir;

echo "SEU SALÁRIO BRUTO: $salario\nVALOR PARA O FGTS: $fgts\nDESCONTOS - SINDICATO: $desv\nDESCONTOS - IMPOSTO DE RENDA: $ir\nSALÁRIO LÍQUIDO: $novosalario";
?>