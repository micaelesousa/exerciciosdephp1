<?php

/*João é vendedor de pastéis e estava trabalhando em sua barraca quando percebeu que um ladrão havia roubado seu dinheiro e saído correndo. João começou a persegui-lo. Para chegar até o ladrão, ele pode seguir duas ruas que formam um ângulo de 90°. A barraca de João está a 6 metros de uma esquina, enquanto o ladrão está a 8 metros da mesma esquina, em uma rua perpendicular à primeira.
(veja o cálculo da hipotenusa)*/


$cateto1 = 6;
$cateto2 = 8;

$hipotenusa = sqrt(($cateto1 * $cateto1) + ($cateto2 * $cateto2));

echo "A distância entre João e o ladrão é de: $hipotenusa metros.";

?>