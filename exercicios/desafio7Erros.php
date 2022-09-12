<?php

    // interface Template{
    //     function metodo1();
    //     public function metodo2($parametro);
    // }

    // abstract class ClasseAbstrata extends Template{
    //     public function metodo3(){
    //         echo "Estou Funcionando";
    //     }
    // }

    // class Classe implements ClasseAbstrata {
    //     function __construct($parametro){

    //     }
    // }


    // $exemplo = Classe();
    // $exemplo.metodo3();


    
    interface Template{
        public function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template{
        public function metodo3(){
            echo "Estou Funcionando";
        }

    }

    class Classe extends ClasseAbstrata {
        function __construct($parametro){

        }

        public function metodo1(){
            echo "Implementando o método1 para poder ser chamado!";
        }

        public function metodo2($paramentro){
            echo "Implementando o Método 2, para ser instanciando!";
        }

        public function metodo3(){
            echo "Instanciando o Método3 da classe Abstrata!";
        }
    }


    $parQualquer = "Um parâmetro Qualquer!";
    $exemplo = new Classe($parQualquer);
    $exemplo->metodo3();






?>