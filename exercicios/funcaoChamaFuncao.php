<?php
    function soma($num1){
        return function($num2) use ($num1){
            return $num1 + $num2;
        };
    }

echo soma(2)(10);

$primeiroValor = soma(10);
echo "<br>";

echo $primeiroValor(50);
























?>