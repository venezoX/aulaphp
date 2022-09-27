<?php

require_once 'Televisao.php';

//variavel,new/nome da classe - e parametros se necessarios
$televisao = new Televisao("lg",50);
$televisao->SetPolegadas(70);
$televisao->ligar();
$televisao->aumentarVolume();
$televisao->aumentarVolume();
$televisao->trocarCanal(12);
$televisao->diminuirVolume();
$televisao->mutar();
$televisao->desligar();

echo "Marca:". $televisao->getMarca()."<br>";
echo "Polegadas:". $televisao->getPolegadas()."<br>";
echo "Canal:". $televisao->getCanal()."<br>";
echo "Volume:". $televisao->getVolume()."<br>";
echo "Ligado?".($televisao->getPower() ? "sim" : "não");

