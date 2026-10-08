<?php

/*Sudoku do Dragão 
O dragão precisa completar um desafio de Sudoku. Para isso, ele recebeu uma pequena malha com alguns números preenchidos e precisa verificar se pode colocar um novo número em uma determinada posição.
Considere a seguinte malha:
+---+---+---+
| 1   | 2  |  3 |
+---+---+---+
|  3  |  1 |  2 |
+---+---+---+
| 2   |  3 |    |
+---+---+---+
O programa deve verificar se o número escolhido já aparece na mesma linha ou na mesma coluna da posição escolhida.
Considere as seguintes regras:
    1 - O número deve estar entre 1 e 3.
    2 - O número não pode se repetir na mesma linha;
    3 - O número não pode se repetir na mesma coluna.
    4 - Caso o número não apareça na linha nem na coluna, a jogada é válida.*/

$matriz = [
    [1, 2, 3],
    [3, 1, 2],
    [2, 3, 1]
];

$numero = 2;

$linha = 0;
$coluna = 0;

if ($numero < 1 || $numero > 3) {
    echo "Número inválido.";

} else {

    $valido = true;

    for ($i = 0; $i < 3; $i++) {
        if ($matriz[$linha][$i] == $numero) {
            $valido = false;
        }
    }

    for ($i = 0; $i < 3; $i++) {
        if ($matriz[$i][$coluna] == $numero) {
            $valido = false;
        }
    }

    if ($valido == true) {
        echo "Jogada válida!";
    } else {
        echo "Jogada inválida! O número já aparece na mesma linha ou coluna.";
    }
}

?>