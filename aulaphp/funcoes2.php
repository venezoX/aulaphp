<?php

$frase = "bom dia fulano.";

echo str_replace ("a", "A", $frase);
echo "<br>";
echo ucwords ($frase);//primeira letra de cada palavra em maiusculo


echo substr_count($frase, "a");