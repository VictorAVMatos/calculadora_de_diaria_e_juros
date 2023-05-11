<?php
// Um determinado entregador de delivery ganha R$80,00 por dia, porém ainda tem
// gorjetas de alguns clientes a receber durante as entregas
// criei esta "calculadora" para auxilia-lo a descobrir o valor total recebido ao final dos dias trabalhados

$valorDia = 80;
$gorjetas = 40;
$diaria = $valorDia + $gorjetas;

echo"Segunda-feira: $diaria\n";

$gorjetas = 15;
$diaria = $valorDia + $gorjetas;

echo "Terça-feira: $diaria";

?>
