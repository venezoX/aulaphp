<?php
$nome = "Otto";
echo $nome;//exibe valor da variavel


echo 'olá meu nome é $nome';// entende o texto como foi escrito
echo "olá meu nome é $nome";//busca pela variavel dentro quando tem aspas duplas


$variavel = "cidade";
$cidade = "bento gonçalves";
echo $$variavel; //traz o valor da variavel dentro da variavel


$cidade2 = $cidade;// atribuição de uma variavel para outra
echo $cidade2;

