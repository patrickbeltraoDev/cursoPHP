<div class="titulo"><h1>Array</h1></div>

<?php

$dados = array(
    "nome" => "Patrick",
    "idade" => 30,
    "Altura" => 1.75,
    "Peso" => 80,
    "Formação" => "Análise e Desenvolvimento de Sistemas"
);

print_r($dados["Formação"]);

echo "<br>", "<br>", "<br>", "<br>"; 


$meses = array(
    1 => "Janeiro",
    "Fevereiro", 
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

print_r($meses);

echo "<br>", "<br>", "<br>", "<br>"; 

$dados1 = [
    "nome" => "Patrick",
    "idade" => 30,
    "sexo" => "M"
];

$dados2 = [
    "naturalidade" => "Brasileiro",
    "faixa_etaria" => "Adulto"
];

$dados_completos = $dados1 + $dados2;
print_r($dados_completos);
echo "<br>", "<br>"; 
print_r(count($dados_completos));

echo "<br>", "<br>", "<br>", "<br>"; 

$indice = array_rand($dados_completos);
print_r("$indice = $dados_completos[$indice]");

echo "<br>", "<br>", "<br>", "<br>"; 

print_r($dados_completos['idade']);

echo "<br>", "<br>", "<br>", "<br>"; 

unset($dados_completos['faixa_etaria']);
print_r($dados_completos);
echo "<br>";
print_r($dados2);

echo "<br>", "<br>", "<br>", "<br>"; 

$impares = array(
    1,
    3,
    5,
    7,
    9
);

$pares = array(
    2,
    4,
    6,
    8,
    10
);

print_r($impares);
echo "<br>", "<br>";
print_r($pares);
echo "<br>", "<br>";

echo "Fim!!";
echo "<br>", "<br>";

$inteiros = $impares + $pares;
print_r($inteiros);

$impares2 = array(
    1,
    3,
    5,
    7,
    9
);

$pares2 = array(
   5 => 2,
    4,
    6,
    8,
    10
);

print_r($impares2);
echo "<br>", "<br>";
print_r($pares2);
echo "<br>", "<br>";

$decimais = $impares2 + $pares2;
print_r($decimais);

echo "<br>", "<br>", "<br>", "<br>"; 


$impares3 = array(
    1,
    3,
    5,
    7,
    9
);

$pares3 = array(
   5 => 2,
    4,
    6,
    8,
    10
);

$todos_numeros = array_merge($impares3, $pares3);
print_r($todos_numeros);
echo "<br>", "<br>";
sort($todos_numeros);
print_r($todos_numeros);