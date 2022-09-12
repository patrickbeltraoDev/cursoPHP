<?php

    class Pessoa{

        public $nome;
        public $idade;


        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __toString(){
            return "{$this->nome} tem {$this->idade} anos.";
        }

        function apresentar(){
            echo $this . '<br>';
        }

        public function __get($atrib){
            echo "Lendo o atributo não declarado: {$atrib} <br>";
            return $atrib;
        }

        public function __set($atributo, $valor){
            echo "Alterando o atributo não declarado: {$atributo} -> {$valor} <br>";
        }

        public function __call($metodo, $param){
            echo "Tentando executar método '${metodo}'";
            echo ", com os parametros: ";
            print_r($param);
        }
    }

    $pessoa1 = new Pessoa('Patrick', 30);
    $pessoa1->apresentar();
    $pessoa1->Sobrenome;
    $pessoa1->peso = '82 kilos';
    $pessoa1->exec(1, 'teste', true);








?>