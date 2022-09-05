<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];
foreach($array as $indice => $letras){
    if ($indice % 2 == 0){
        echo "$letras";
        echo '<br>';
    }else{
        continue;
    }
}

echo '<hr><br>';

$limite = 10;
$inicio = 0;

while($inicio < $limite){
    echo "Contando com While: $inicio <br>";
    $inicio ++;
}

echo '<hr><br>';

$ult = 20;
$ini = 10;

do{
    echo "Contando com Do - While: $ini <br>";
    $ini++;
}while($ini < $ult);

echo '<hr><br>';

$letras = [
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M"
];

$indice = 0;

while($indice < count($letras)){
    foreach($letras as $i => $let){
        echo "$i é o índice da letra: $let <br>";
        $indice++;
    }
    
}