<?php

$a = 15;
$b = 10;


 //fazer a divisao de um pelo outro e 
    do
    {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    

    while($resto != 0);

    if($resto == 0)
    {
        $result = $a;
    }

    echo "$result"; 