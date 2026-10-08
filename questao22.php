<?php
/*Na Escola Profissionalizante Órbita, os professores Renata e Israel precisam organizar os horários das aulas do curso de Montagem de Foguetes.
A escola possui cinco dias letivos, de segunda a sexta-feira, e os professores precisam escolher em qual dia cada aula será ministrada.
Cada professor possui 20 aulas semanais, distribuídas em 4 disciplinas, com 5 aulas para cada disciplina.
Para organizar os horários, algumas regras devem ser respeitadas:
    1 - Renata não pode dar aulas na segunda-feira, pois participa de uma reunião pedagógica.
    2 - Israel não pode dar aulas na sexta-feira, pois utiliza o laboratório nesse dia para manutenção.
    3 - Renata ministra Propulsão de Foguetes na terça-feira.
    4 - Israel ministra Estruturas de Foguetes na quinta-feira.
    5 - Caso o dia escolhido não esteja disponível para o professor, o sistema deve informar que o horário não pode ser alocado.
    6 - Caso o dia esteja disponível, o sistema deve informar que a aula foi alocada com sucesso.
Crie um programa em PHP utilizando estruturas condicionais (if, elseif e else) para verificar se os horários escolhidos para Renata e Israel podem ser alocados de acordo com as regras da escola.*/


$diaRenata = "terça";
$diaIsrael = "quinta";

if ($diaRenata == "segunda") {
    echo "Renata: horário não pode ser alocado na segunda-feira.\n";

} elseif ($diaRenata == "terça") {
    echo "Renata: aula de Propulsão de Foguetes alocada com sucesso na terça-feira.\n";

} else {
    echo "Renata: aula alocada com sucesso na $diaRenata-feira.\n";
}


if ($diaIsrael == "sexta") {
    echo "Israel: horário não pode ser alocado na sexta-feira.\n";

} elseif ($diaIsrael == "quinta") {
    echo "Israel: aula de Estruturas de Foguetes alocada com sucesso na quinta-feira.\n";

} else {
    echo "Israel: aula alocada com sucesso na $diaIsrael-feira.";
}

?>