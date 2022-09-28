<?php
$opção1 = "pedra";
$opção2 = "tesoura";
$opção3 = "papel";
$opção4 = "spock";
$opção5 =  "lagarto";


$pessoa1 = $opção1; //trocar a opção para mudar o resultado
$pessoa2 = $opção3;

$possibildade =[
    "pedra"=> ["tesoura" => "ganha",
                "papel"=>"perde",
                "pedra"=>"empata",
                "spock"=>"ganha",
                "lagarto"=>"perde"],

    "tesoura"=> ["papel" => "ganha",
                "pedra"=>"perde",
                "tesoura"=>"empata",
                "spock"=>"ganha",
                "lagarto"=>"perte"],

    "papel"=> ["pedra" => "ganha",
                "tesoura"=>"perde",
                "papel"=>"empata",
                "spock"=>"perde",
                "lagarto"=>"ganha"],

    "spock"=> ["pedra" => "ganha",
                "tesoura"=>"ganha",
                "papel"=>"perde",
                "lagarto"=>"perde",
                "spock"=>"empata"],

    "spock"=> ["pedra" => "perde",
                "tesoura"=>"perde",
                "papel"=>"ganha",
                "lagarto"=>"empata",
                "spock"=>"ganha"],             


];

    if ($possibilidade[$jogador1][$jogador2]=="ganha"){
        echo "O jogador 1 ".$jogador1."venceu" ;
      }

     elseif ($possibilidade[$jogador1][$jogador2]=="perde3"){
        echo "O jogador 1 ".$jogador1."venceu" ;
      }
      else{
        echo"Empate";
      }