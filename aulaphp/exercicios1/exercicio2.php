<?php





function cotacao($valorDolar){
    $dolar = 5;
    return $valorDolar * $dolar;
}


echo cotacao(50).'<br>';
echo cotacao(123).'<br>';
echo cotacao(0.5).'<br>';
echo cotacao(4).'<br>';
echo cotacao(1).'<br>';