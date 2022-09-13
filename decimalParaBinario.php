<?php

$numbin = 483;
$numbin = $divisor;
$binariosArmazem = array();

 

    do {
        $resto = $numbin % 2;
        $divisor = $numbin / 2;
        if ($resto == 1 || $resto == 0){
    array_push($binariosArmazem,$resto);
        }

    }

while ($divisor > 1);

$rev = array_reverse($binariosArmazen);

foreach ($rev as $binariosArmazen)

{
    echo $binariosArmazem;
}