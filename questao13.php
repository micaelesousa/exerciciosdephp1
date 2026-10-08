<?php 

/*Elabore um programa para cálculo a ser pago por um produto, considerando o preço normal de etiqueta e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. 
    Código Condição de Pagamento
    1 - À vista em dinheiro, recebe 10% de desconto; 
    2 - À vista no cartão de crédito, recebe 5% de desconto;
    3 - Em 3 vezes no cartão, preço normal de etiqueta sem juros;
    4 - Em 6 vezes no cartão, preço normal de etiqueta mais juros de 10%;*/

$produto=4500;
$compra =["A Vista no Dinheiro", "A Vista no Cartão", "Parcelado em 3 vezes (Sem Juros)", "Parcelado em 6 vezes (Com Juros)"];
$c=3;

if ($c==0) {
    $desc = $produto * 10 / 100;
    $preco = $produto - $desc;
    echo "VALOR FINAL: $preco";
}

elseif ($c==1) {
    $desc = $produto * 5 / 100;
    $preco = $produto - $desc;
    echo "VALOR INICIAL: $produto\n";
    echo "VALOR FINAL: $preco";
}

elseif ($c==2) {
    $preco = $produto / 3;
    $total = $preco * 3;
    echo "VALOR INICIAL: $produto\n";
    echo "VALOR DAS PARCELAS: $preco\n";
    echo "VALOR FINAL: $total";
}

else {
    $desc = $produto * 10 / 100;
    $preco = $produto / 6 + $desc;
    $total = $preco * 6;
    echo "VALOR INICIAL: $produto\n";
    echo "VALOR DAS PARCELAS: $preco\n";
    echo "VALOR FINAL: $total";
}


?>