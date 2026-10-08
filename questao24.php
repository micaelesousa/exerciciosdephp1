<?php
/*Escreva o código em php de um sistema agrícola que precisa verificar se uma máquina pode iniciar a colheita de milho em uma determinada plantação.
Para iniciar a colheita, devem ser atendidas as seguintes condições:
    1 -A plantação precisa estar pronta para a colheita;
    2 -A quantidade de milho deve ser maior ou igual a 100 sacas;
    3 -A máquina precisa estar disponível ou ter uma máquina reserva;
    4 -A máquina principal não pode estar em manutenção.*/

$plantacaoPronta = True;
$quantidade = 120;
$maquinaDisp = false;
$maquinaReserva = true;
$manutencao = false;

if ($plantacaoPronta == true && $quantidade >=100 && ($maquinaDisp == true || $maquinaReserva == true) && $manutencao == false) {
    echo "colheita autorizada";
} else {
    echo "colheita não autorizada";
}

?>