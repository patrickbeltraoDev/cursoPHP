<?php

    class Pessoa{

        public $nome;
        public $idade;
        public $peso;
        public $altura;
 
        function __construct($nome, $idade, $peso, $altura){
            echo 'O construtor foi chamado!!! <br>';
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        // function __destruct(){
        //     echo 'O obejto foi liberado!!!';
        // }

        function apresentar(){
            return "Nome: {$this->nome} <br>
                    Idade: {$this->idade} anos <br>
                    Peso: {$this->peso} kg <br>
                    Altura: {$this->altura} cm<hr>";
        }
    }

    $pessoa1 = new Pessoa('Patrick', 30, 83, 175);
    echo $pessoa1->apresentar();

    $pessoa2 = new Pessoa('Thais', 37, 56, 162);
    echo $pessoa2->apresentar();










?>