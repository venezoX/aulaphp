<?php

$palavraOriginal = "otto";
$palavraReverse = "";
$tamanho = strlen ($palavraOriginal);

for ($i=$tamanho -1; $i >= 0;$i-- ){
    $palavraReverse.=$palavraReverse;
}

if ($palavraOriginal == $palavraReverse){
    Echo "é palindromo";
}
else{
    echo "Não é palindromo.";
}