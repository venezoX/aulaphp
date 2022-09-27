<?php

$numero = 300;
$armazemBinario = array();



do  
{
    $resto = $numero % 2;
    $div = $numero / 2;
    $numero = $div;
    if ($resto == 1 || $resto == 0)
    array_push($armazemBinario,$resto);
}

while ($div > 1);
for ($i=(count($armazemBinario)-1);$i>=0;$i--)
{
    $contrario[] = $armazemBinario[$i];
}
foreach ($contrario as $binarioReverso) {
    echo $binarioReverso;
}
echo "$binarioReverso  é o binario do número 300";

