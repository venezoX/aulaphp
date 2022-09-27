<?php

$alternativa1 = "pedra";
$alternativa2 = "papel";
$alternativa3 = "tesoura";

$spock=$alternativa1;
$lagarto = $alternativa2;



  if($spock == $alternativa2 && $lagarto == $alternativa1 || $spock == $alternativa1 && $lagarto == $arternativa3)
  {
    Echo " O jogador Spock escolheu $spock e venceu $lagarto";
  }

  elseif ($lagarto == $alternativa2 && $spock  == $alternativa1 || $lagarto == $alternativa3 && $spock == $arternativa2 || $lagarto == $spock)
  {
    echo " O jogador Lagarto escolheu $lagarto e venceu $spock";
  } 

  // spock - pedra|papel  lagarto - spock|tesoura