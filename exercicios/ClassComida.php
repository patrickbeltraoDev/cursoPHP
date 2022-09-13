<?php

    abstract class Comida{
        public $peso;

    }

    class Spaguete extends Comida{

    }

    class Hamburguer extends Spaguete{

    }
    
    class Feijoada extends Hamburguer{

    }

    class Pessoa{
        public $peso;

        public function __construct($pesoPessoa){
            $this->peso = $pesoPessoa;
        }

        public function comer(Comida $refeicao){
            $this->peso += $refeicao->peso;
        }
    }

    $macorronada = new Spaguete();
    $macorronada->peso = 1.2;

    $pessoa1 = new Pessoa(80.0);
    $pessoa1->comer($macorronada);
    echo $pessoa1->peso;

    echo '<br>';


    function triplo($valor){
        return ($valor ** 3);
    }

    $array = [1, 2, 3, 4, 5];

    $resultado = array_map('triplo', $array);

    print_r($resultado);

    echo '<br>';

    







?>