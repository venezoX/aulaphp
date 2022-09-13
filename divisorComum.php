<?php

$n1 = 15;
$n2 = 10;


    do
    {
        $resto = $n1 % $n2;
        $n1 = $n2;
        $n2 = $resto;
    }
    

    while($resto != 0);

    if($resto == 0)
    {
        $result = $n1;
    }

    echo "$result"; 