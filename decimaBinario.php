<?php

$numbin = 483;
$binariosArmazem = array();
$numbin = $divisor;


    do {
        $resto = $numbin % 2;
        $divisor = $numbin / 2;
        if ($resto == 1 || $resto == 0){
    array_push($bi,$resto);
        }

    }

while ($divisor > 1);

$rev = array_reverse($bi);

foreach ($rev as $bin)

{
    echo $bin;
}