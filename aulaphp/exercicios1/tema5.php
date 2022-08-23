<?php
date_default_timezone_set("America/Sao_Paulo");
for($i = 1; $i<=31; $i++){
    if( $i != date("d")){
        echo "<br>".$i;
    }
}