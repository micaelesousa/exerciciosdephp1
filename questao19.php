<?php

/* Uma raposa está correndo por uma floresta e precisa atravessar uma área de 100 metros. Para correr com segurança, sua velocidade deve estar entre 10 km/h e 20 km/h.
Entretanto:
    1 - Se a raposa estiver cansada, sua velocidade máxima é de 15 km/h.
    2 - Se estiver chovendo, sua velocidade máxima é de 12 km/h.
O programa deve verificar se a velocidade da raposa está adequada às condições.*/

$velocidade = 14;
$cansada = true;
$chovendo = false;

if ($velocidade < 10) {
    echo "Velocidade muito baixa. Não está adequada.";

} elseif ($velocidade > 20) {
    echo "Velocidade muito alta. Não está adequada.";

} elseif ($cansada == true && $velocidade > 15) {
    echo "Velocidade muito alta para uma raposa cansada.";

} elseif ($chovendo == true && $velocidade > 12) {
    echo "Velocidade muito alta para uma raposa na chuva.";

} else {
    echo "Velocidade adequada! Pode atravessar com segurança.";
}

?>