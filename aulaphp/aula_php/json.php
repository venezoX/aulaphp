<?php
$pessoas = [
    ["nome" => "joão", "idade" => "18"],
    ["nome" => "eduardo", "idade" => "29"]
];
echo json_encode($pessoas);

$json = '{"nome":"otto","idade":24}';
var_dump (json_decode ($json));