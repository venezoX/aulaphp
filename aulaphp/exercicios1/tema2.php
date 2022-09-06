<?php

$ginastas[0]["nome"] = "Jade";
$ginastas[0]["nota"] = 12.95;
$ginastas[0]["pais"] = "Brasil";
$ginastas[1]["nome"] = "Shawn";
$ginastas[1]["nota"] = 13.50;
$ginastas[1]["pais"] = "EUA";
$ginastas[2]["nome"] = "Daiane";
$ginastas[2]["nota"] = 14.35;
$ginastas[2]["pais"] = "Brasil";
$ginastas[3]["nome"] = "Nadia";
$ginastas[3]["nota"] = 12.90;
$ginastas[3]["pais"] = "Romênia";

foreach ($ginastas as $ginasta){
    echo $ginasta["nome"]."<br>";
}

echo "<br>";
$somaNotas = 0.0;

foreach ( $ginastas as $ginasta){
    $somaNotas += $ginasta["nota"];
}

echo $somaNotas / count($ginastas);

echo "<br>";
//nome da notas acima de 13
foreach ($ginastas as $ginasta){
    if ($ginasta["nota"] >= 13){
        echo $ginasta["nome"] ."<br>";
    }

}

echo "<br>";

$paises = [];

foreach ($ginastas as $ginasta){
    $paises[] = $ginasta["pais"];
    //array_push($paises,$ginasta["pais"]); / mesma função que a de cima
}

print_r (array_count_values($paises));



echo "<br>";

$nomeGinasta = "";
$notaGinasta = 0;

foreach ($ginastas as $ginasta){
    if($ginasta["nota"] > $notaGinasta){
        $nomeGinasta = $ginasta["nome"];
        $notaGinasta = $ginasta["nota"];
    }
}

echo $nomeGinasta;