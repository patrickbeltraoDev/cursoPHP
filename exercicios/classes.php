<?php

    class Clientes{
        //ATRIBUTOS
        public $nome = '';
        public $sobrenome = '';
        public $idade = '';
        public $cpf = '';

        //MÉTODOS

        public function visualizarDados(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    Idade: {$this->idade} <br>
                    CPF: {$this->cpf} <br>
                    ";
        }
    }

    //CADASTRO CLIENTE 1
    $cliente1 = new Clientes();
    $cliente1->nome = "Patrick";
    $cliente1->sobrenome = "Beltrão";
    $cliente1->idade = 30;
    $cliente1->cpf = '043.875.421.28';

    //CADASTRO CLIENTE 2
    $cliente2 = new Clientes();
    $cliente2->nome = "Thais";
    $cliente2->sobrenome = 'Sena';
    $cliente2->idade = 36;
    $cliente2->cpf = '011.430.031.36';


    echo $cliente1->visualizarDados(), '<hr>';
    echo $cliente2->visualizarDados();
    






















?>