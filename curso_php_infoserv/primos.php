<?php
$numeroprimo = [];

for($i = 1; $i <= 28 ; $i++){
  //  echo $i .',';
        $primo = true;
    for($n = 2; $n < $i; $n++){
        if($i % $n == 0){
            $primo = false;
            break;
        }
    }

    if($primo){
        array_push($numeroprimo,$i);
    }
}
print_r($numeroprimo).'<br>';

//===========================================================\\




      
