<?php

/* O Detetive: Faça um script que faça 5 perguntas para uma pessoa sobre um crime:
    1. "Telefonou para a vítima?"
    2. "Esteve no local do crime?"
    3. "Mora perto da vítima?"
    4. "Devia para a vítima?"
    5. "Já trabalhou com a vítima?"
Classificação: 2 respostas SIM = "Suspeita", 3 ou 4 = "Cúmplice", 5 = "Assassino". Caso contrário, "Inocente".*/

$respostas = ["sim", "não", "sim", "não", "não"];

$sim = 0;

foreach ($respostas as $resposta) {
    if ($resposta == "sim") {
        $sim++;
    }
}

if ($sim == 2) {
    echo "Suspeito";
} elseif ($sim == 3 || $sim == 4) {
    echo "Cúmplice";
} elseif ($sim == 5) {
    echo "Assassino";
} else {
    echo "Inocente";
}

?>