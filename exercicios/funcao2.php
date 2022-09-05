<?php
    function somarValores(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }

    echo somarValores(5, 10, 20, 100);

    echo "<hr>";

    function membros($titular, ...$dependentes){
        echo "Titular é {$titular} <br>";
        if($dependentes){
            foreach($dependentes as $dep){
                echo "Dependentes: $dep <br>";
            }
        }else{
            echo "Não tem dependentes!!!";
        }
        
    }

    echo membros("Patrick", "Miguel", "Samuel");
    
    echo "<hr> <br>";

    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente!'){
        return "Bem vindo, $nome $sobrenome!<br>";
    }

    echo saudacao("Patrick", "Beltrão");





?>