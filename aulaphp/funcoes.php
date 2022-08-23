<?php

function isPar($numero) {
    return $numero % 2 === 0;
}

function isImpar($numero) {
    return $numero % 2 === 1;
}


function parOuImpar($numero){
    if(isImpar($numero)){
        echo "impar";
    }
    else{
        echo "par";
    }
}


parOuImpar(2);

$num = 7;
parOuImpar ($num);




