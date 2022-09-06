<?php

$numeros = [1,2,3,4,5,6,7,8,9,10];
$numerospares = 0;

foreach($numeros as $numero){
    
    if($numero % 2 == 0){
        $numerospares += $numero;
    }
}
print_r ($numerospares);
