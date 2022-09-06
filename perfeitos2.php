<?php


$arrayNumerosPerfeitos=[];
for($i=1;$i<=28;$i++){
    $somaDivisores = array_sum(retornaArrayDivisores($i));
    if($i == $somaDivisores){
        array_push($arrayNumerosPerfeitos , $i);
    }
}
function retornaArrayDivisores($numero){
    $arrayDivisores = [];
    for($n = 1; $n < $numero; $n++){
        if($numero % $n == 0){
            array_push($arrayDivisores,$n);
        }
    }
    return $arrayDivisores;
}

print_r($arrayNumerosPerfeitos);