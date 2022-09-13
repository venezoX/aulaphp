<?php

$n = 483;
$binariosArmazem = array();
$n = $div;


    do {
        $resto = $n % 2;
        $div = $n / 2;
        if ($resto == 1 || $resto == 0){
    array_push($bi,$resto);
        }

    }

while ($div > 1);

$rev = array_reverse($bi);

foreach ($rev as $bin)

{
    echo $bin;
}