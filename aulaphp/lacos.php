<?php
// for (variavel de inicialização; condição do laço de execução, sempre verdaeira; incrementolaço será repetido enquanto a condição for verdadeira)
// do while ele executa uma vez para depois verificar se continua sendo executado

// fazer como tarefa os tres tipos de laços



for($i = 0; $i < 10; $i++):
    echo $i."<br>";
endfor;

while($i<10){
    echo "O contador agora é $i"}







 
$documentos = ["pedro" => "982.128.218-22", "nicolas" => "123.123.123-99"];
foreach ($documentos as $nome => $cpf) {
    echo "a pessoa chamada $nome tem o CPF $cpf<br>";
}
