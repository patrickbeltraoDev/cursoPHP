<?php

    $var1 = 1;

    function mudarValor(){
        $var1 = "nome";
        echo "Valor da variável dentor da função: $var1 <br>";
    }

    echo "Valor da variável antes da função: $var1 <br>";
    mudarValor();
    echo "Valor da variável depois de executar a função: $var1 <br>";
    
    echo "<hr><br>";

    function alterarValor(){
        global $var1;
        $var1 = "Patrick";
        echo "Valor da variável dentro da função: $var1<br>";
    }

    echo "Valor da variável antes da função: $var1 <br>";
    alterarValor();
    echo "Valor da variável depois de executar a função: $var1 <br>";

    echo "<hr><br>";

    function msg($nome){
        return "Bem vindo, {$nome}!!!";
    }

    $mensagem = msg("Patrick");
    echo $mensagem;

    echo "<hr><br>";

    function soma($num1, $num2){
        return $num1 + $num2;
    }

    echo "A soma dos valores: ", soma(100, 50);

    echo "<hr><br>";

    $numero = 1;

    function mudar_valor($x, $novoValor){
        $x = $novoValor;
    }

    echo "O valor da variável quando fora da função é: $numero <br>";
    echo mudar_valor($numero, 200);
    echo "O valor da variável depois da função é: $numero <br>";    

    echo "<hr><br>";

    function alterar_valor(&$x, $novoValor){
        $x = $novoValor;
    }

    echo "O valor da variável quando fora da função é: $numero <br>";
    echo alterar_valor($numero, 200);
    echo "O valor da variável depois da função é: $numero <br>";




?>