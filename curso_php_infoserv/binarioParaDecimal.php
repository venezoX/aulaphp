<?php

$numero - 11110; //número 30

$tamanho = 5;
$decimal = 0;

for($i = $tamanho - 1; $i >0; $i--){
    //(2^4)+(2^3)+(2^2)+(2^1)+(2^0)
    $decimal += pow(2,$i);
}

echo decimal;