<?php
date_default_timezone_set("America/Sao_Paulo");
$hora = date("H");



if ($hora < 12){
    echo 'Bom dia!';
}
elseif ($hora >= 12 && $hora < 18) {
    echo 'Boa Tarde!';
}
else {
    echo 'Boa Noite!';
}
