<?php

function velocidadeMedia($tempo, $distancia){
    return $distancia / $tempo;
}

echo velocidadeMedia(2,100).'<br>';
echo velocidadeMedia(1.5,600).'<br>';
echo velocidadeMedia(0.5,200);

