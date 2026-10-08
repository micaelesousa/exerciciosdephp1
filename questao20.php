<?php

$horasTrabalhadas = 250;

$jornadaNormal = 60;
$dias = 4;

$totalNormal = $jornadaNormal * $dias;

if ($horasTrabalhadas > $totalNormal) {
    $horasExtras = $horasTrabalhadas - $totalNormal;
    $descanso = $horasExtras * 1.5;

} else {
    $horasExtras = 0;
    $descanso = 0;
}

echo "Horas trabalhadas: $horasTrabalhadas horas\n";
echo "Jornada normal: $totalNormal horas\n";
echo "Horas extras: $horasExtras horas\n";
echo "Descanso adicional: $descanso horas\n";

?>