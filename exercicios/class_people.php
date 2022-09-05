<?php

    class Pessoa{

        public $nome;
        public $sobrenome;

        function __construct($nome, $sobrenome){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }

        function apresentar(){
            echo "Nome: {$this->nome} <br> Sobrenome: {$this->sobrenome}";
        }
    }  


    $pessoa1 = new Pessoa("Patrick", "Beltrão");// nesse método só é possível criar a instância, atribuindo os atributos
    echo $pessoa1->apresentar(), '<hr>';

    // $pessoa1 = new Pessoa;  nesse método é possível criar a instância e depois atribir o atributos
    // $pessoa1->nome = "Patrick";

    class Usuario extends Pessoa{

        public $username;
        public $password;

        function __construct($nome, $sobrenome, $senha){

            parent::__construct($nome, $sobrenome);
            $this->username = strtolower("@{$nome}.{$sobrenome}");
            $this->password = $senha;
        }

        function verificar(){
            parent::apresentar();
            echo "<br>Usuário: {$this->username} <br> Senha: {$this->password}";
        }
    }

    $user1 = new Usuario("Patrick", "Martins", "Paradoxo@555");
    echo $user1->verificar(), '<hr>';




















?>