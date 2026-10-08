<?php

/*[NÍVEL LENDÁRIO] 
Mixxy-X789 e Ninin-X989 são dois extraterrestres responsáveis por monitorar uma estação espacial durante um plantão.
Para evitar o cansaço, a regra do plantão é:
    1 - Cada funcionário pode trabalhar no máximo 6 horas seguidas;
    2 - Quando um funcionário completa 6 horas de trabalho, o outro deve assumir o plantão;
    3 - Os dois funcionários devem se alternar durante todo o período;
    4 - O plantão começa com Mixxy-X789;
Crie um algoritmo que receba a quantidade total de horas do plantão e determine quantas horas Mixxy-X789 e Ninin-X989 trabalham, respeitando a regra de alternância a cada 6 horas.*/


$horasPlantao = 30;

$mixxy = 0;
$ninin = 0;
$horasRestantes = $horasPlantao;

$funcionario = "Mixxy-X789";

while ($horasRestantes > 0) {

    if ($horasRestantes >= 6) {
        $horasTrabalhadas = 6;
    } else {
        $horasTrabalhadas = $horasRestantes;
    }

    if ($funcionario == "Mixxy-X789") {
        $mixxy = $mixxy + $horasTrabalhadas;
        $funcionario = "Ninin-X989";
    } else {
        $ninin = $ninin + $horasTrabalhadas;
        $funcionario = "Mixxy-X789";
    }

    $horasRestantes = $horasRestantes - $horasTrabalhadas;
}

echo "Horas do plantão: $horasPlantao horas\n";
echo "Mixxy-X789 trabalhou: $mixxy horas\n";
echo "Ninin-X989 trabalhou: $ninin horas";

?>