<?php

$numeroAleatorio = rand ( 1,15);

$triploNumeroAleatorio = $numeroAleatorio *3;

for ($i = $numeroAleatorio; $i <= $triploNumeroAleatorio; $i ++){
    echo "<br>".$i;
    if ($i %7 == 0){
        break;
    }
}