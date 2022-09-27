<?php

/*caso o valor dentro de $n seja passado como inteiro sem ser string,
ele diz que não foi possivel verificar*/

$n= "otto";
$palavra = ($n);
$inverso = strrev($palavra);

if ($palavra===$inverso) {
	echo "$palavra é igual à $inverso";
    

} 

elseif ($palavra != $inverso) {
    

	echo "$palavra NÃO é igual à $inverso";
    
}

else{
        echo "$palavra NÃO foi possivel verificar";
}