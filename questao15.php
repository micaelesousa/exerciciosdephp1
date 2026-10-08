<?php

/* Consumo de energia: A empresa de energia ENERGIA MÁXIMA utiliza a seguinte tabela para calcular o valor da conta:
    1 - Até 100 kWh: R$ 0,50 por kWh
    2 - De 101 a 200 kWh: R$ 0,70 por kWh
    3 - De 201 a 300 kWh: R$ 0,90 por kWh
    4 - Acima de 300 kWh: R$ 1,10 por kWh
Faça um script em PHP que receba a quantidade de kWh consumidos e calcule o valor da conta.
Ao final, informe:
   1 - Consumo
   2 - Valor do kWh
   3 - Valor total da conta*/
   
$vlc=200;

 if($vlc>=100) { 
    $vk = 0.50;
    $valor=$vlc*0.50;
 }
 
 if($vlc>=200) { 
   $vk = 0.70;
   $valor=$vlc*0.70;
 }

  if($vlc>=300) {
    $vk = 0.90; 
    $valor=$vlc*0.90;
 }

 else {
    $vk = 1.10;
    $valor=$vlc*1.10;
 }
 
 echo (" O CONSUMO DE ENERGIA FOI: $vlc\n VALOR DO KWH: $vk\n VALOR TOTAL: $valor ")
 ?>