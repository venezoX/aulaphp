<?php

$opção1 = "pedra";
$opção2 = "tesoura";
$opção3 = "papel";

$pessoa1 = $opção1; //trocar a opção para mudar o resultado
$pessoa2 = $opção3;

if($pessoa1 == $opção3 && $pessoa2 == $opção1 ||$pessoa1 == $opção2 && $pessoa2 == $opção3 ||$pessoa1 == $opção1 && $jogador2 == $opção2)
{
    echo "O Carlos escolheu ". $pessoa1." e venceu do Roberto";
}

elseif ($pessoa2 == $opção3 && $pessoa1 == $opção1 ||$pessoa2 == $opção2 && $pessoa1 == $opção3 ||$pessoa2 == $opção1 && $pessoa1 == $opção2)
{
    echo "O Roberto escolheu ". $pessoa2." e venceu do Carlos";
}

else
{
    echo "Empate";
}