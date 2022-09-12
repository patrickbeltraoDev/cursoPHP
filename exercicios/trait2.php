<?php

    trait validacao{
        public function validarString($paramentro){
            return isset($paramentro) && $paramentro !== '';
        }
    }

    trait validacaoMelhor{
        public function validarString($paramentro){
            return isset($paramentro) && trim($paramentro);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor{
            validacaoMelhor::validarString insteadOf validacao;

            validacao::validarString as validacaoSimples;
        }
    }


    $user1 = new Usuario();
    var_dump($user1->validarString('Patrick    ')); 
    







?>