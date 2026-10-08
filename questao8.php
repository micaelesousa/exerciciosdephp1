<?php

//Sistema de Caixa Eletrônico: O script deverá receber o valor do saque e informar quantas notas de cada valor serão fornecidas. As notas disponíveis são: 1, 5, 10, 50 e 100 reais. Valor mínimo de saque: 10 reais. Máximo: 600 reais. (Ex: Sacar 256 reais gera duas notas de 100, uma de 50, uma de 5 e uma de 1).//

$valor = 400;

if ($valor < 10 || $valor > 600) {
    echo "Valor inválido. O saque deve ser entre R$ 10 e R$ 600.";
} else {

    $notas = [100, 50, 10, 5, 1];

    foreach ($notas as $nota) {

        $quantidade = 0;

        while ($valor >= $nota) {
            $valor = $valor - $nota;
            $quantidade++;
        }

        if ($quantidade > 0) {
            echo "Notas de R$ $nota: $quantidade<br>";
        }
    }
}

?>