<?php

    trait validacao{
        public function validarString($paramentro){
            return isset($paramentro) && $paramentro !== '';
        }
    }

    trait validacaoMelhor{
        public $valorA = "este é o valor da variável A  <br>";
        public function validarStringMelhor($paramentro){
            return isset($paramentro) && trim($paramentro);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;

        public function mostrarValor(){
            echo "Irá mostrar aqui o valor da Variável A que esta na TRAIT validacaoMelhor";
        }
    }


    $user1 = new Usuario();
    var_dump($user1->validarString('Patrick    ')); 
    echo '<br>';
    var_dump($user1->validarStringMelhor('Patrick     '));  
    echo '<br>';
    echo $user1->valorA;  
    $user1->mostrarValor();







?>