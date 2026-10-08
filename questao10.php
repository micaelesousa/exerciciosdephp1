<?php

/*Hipermercado QueroTudoQueÉSeu: Carnes em promoção.
    1 - Filé Duplo: Até 5Kg (R$ 4,90/Kg) | Acima (R$ 5,80/Kg)
    2 - Alcatra: Até 5Kg (R$ 5,90/Kg) | Acima (R$ 6,80/Kg)
    3 - Picanha: Até 5Kg (R$ 6,90/Kg) | Acima (R$ 7,80/Kg)
Cliente pode levar apenas um tipo. Cartão QueroTudoQueÉSeu dá 5% de desconto. Gere um cupom fiscal detalhado.*/

$tipo = 1;
$quantidade = 6; 
$cartao = "sim"; 

if ($tipo == 1) {
    $nome = "Filé Duplo";

    if ($quantidade <= 5) {
        $precoKg = 4.90;
    } else {
        $precoKg = 5.80;
    }

} elseif ($tipo == 2) {
    $nome = "Alcatra";

    if ($quantidade <= 5) {
        $precoKg = 5.90;
    } else {
        $precoKg = 6.80;
    }

} elseif ($tipo == 3) {
    $nome = "Picanha";

    if ($quantidade <= 5) {
        $precoKg = 6.90;
    } else {
        $precoKg = 7.80;
    }

} else {
    echo "Tipo de carne inválido.";
    exit;
}

$valor = $quantidade * $precoKg;

if ($cartao == "sim") {
    $desconto = $valor * 0.05;
} else {
    $desconto = 0;
}

$total = $valor - $desconto;

//OBS: Fiz para ser executado no navegador, por isso utilizei o <br> para quebrar a linha :)//

echo "      QUEROTUDOQUEÉSEU<br>";
echo "        CUPOM FISCAL<br>";
echo "================================<br>";
echo "Carne: $nome<br>";
echo "Quantidade: $quantidade Kg<br>";
echo "Preço por Kg: R$ " . number_format($precoKg, 2, ',', '.') . "<br>";
echo "Valor: R$ " . number_format($valor, 2, ',', '.') . "<br>";
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "--------------------------------<br>";
echo "TOTAL: R$ " . number_format($total, 2, ',', '.') . "<br>";
echo "================================<br>";

?>