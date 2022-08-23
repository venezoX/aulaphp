<?php
$funcionarios[0]["nome"] = "João";
$funcionarios[0]["salario"] = 3000;
$funcionarios[1]["nome"] = "Pedro";
$funcionarios[1]["salario"] = 2000;
$funcionarios[2]["nome"] = "Maria";
$funcionarios[2]["salario"] = 2500;
$funcionarios[3]["nome"] = "Aline";
$funcionarios[3]["salario"] = 4000;





//Mostre a lista com o nome de todos os funcionários.
print_r ($funcionarios);
echo "<br>";

//Mostre o nome dos funcionários com salário maior ou igual à 3000 separados por vírgula.

$nomeCorrigido = "";


foreach ($funcionarios as $funcionario){
    if ($funcionario["salario"] >= 3000){
        $nomeCorrigido .= $funcionario ["nome"].", ";
    }
}

echo trim($nomeCorrigido, ", ");

//Mostre a média dos salários.
echo "<br>";
$somaValores = 0;


foreach ($funcionarios as $funcionario){
    $somaValores += $funcionario["salario"];
}
echo "media:";
echo $somaValores / count($funcionarios);

echo "<br>";

//outro exercicio

$nomeFuncionario = "";
$salarioFuncionario = 10000000000000;

foreach ($funcionarios as $funcionario){
    if ($funcionario["salario"] < $salarioFuncionario){
        $salarioFuncionario = $funcionario["salario"];
        $nomeFuncionario = $funcionario["nome"];
    }
}

echo $nomeFuncionario;

