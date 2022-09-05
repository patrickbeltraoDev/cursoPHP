<?php

$result = "#";

for($i = 0; $i < 5; $i++){
    echo "<h1>$result</h1>";
    echo "<br>";
    $result = $result . "#";
    
}

echo "<hr>";
echo "<br>";

$hastag = "#";
$lista = [];

for ($i = 0; $i < 5; $i++){
    $lista[$i] = $hastag;
    print_r($lista);
    echo "<br>";

}
