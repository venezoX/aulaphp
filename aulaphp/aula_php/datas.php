<?php
date_default_timezone_set("America/Sao_Paulo");

$hoje = date("d/m/Y H:i:s");

echo $hoje;

$timestamp = strtotime("16-12-1997");
$aniversario = date("d/m/y", $timestamp);
echo $aniversario;

$ontem = date("d/m/y - l", strtotime("-3 day"));
echo $ontem;
