<?php

echo '<h1> FOREACH </H1>';

$dias_semana = [
    "Domingo",
    "Segunda-Feira",
    "Terça-Feira",
    "Quarta-Feira",
    "Quinta-Feira",
    "Sexta-Feira",
    "sábado"
];

foreach($dias_semana as $dias){
    echo "$dias <br>";

}

echo "<hr>";

foreach($dias_semana as $indice => $valor){
    echo "$indice => $valor <hr>";
}


$matrix = [
    ["a", "e", "i", "o", "u"],
    [1, 2, 3, 4, 5]
];

foreach($matrix as $linhas){
    foreach($linhas as $valores){
        echo "$valores";
    }
    echo"<hr>";
}


$numeros = [1, 2, 3, 4, 5];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}