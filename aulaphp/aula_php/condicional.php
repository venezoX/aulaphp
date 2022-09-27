<?php

$idade = 17;// se for de maior exibe maior se for de menor exibe menor

if($idade < 18){
    echo "menor de idade";

}else{
    echo "maior de idade";
}

$sexo = "m";
switch ($sexo){
    case "m" :
        echo "masculino";
        break;
    case "f":
        echo "feminina";
        break;
    default :
        echo "outro";
        break;
}// outra forma de condicional com == =+ =-

echo ($idade >= 18) ? "maior de idade" : "menor de idade"; // formula para duas condições

//?? usado para fazer comparação se foi preenchido ou não


$nota = 10;
echo $nota ?? 'vazio';