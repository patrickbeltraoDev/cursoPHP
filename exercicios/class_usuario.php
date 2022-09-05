<?php

    class Pessoa{
        public $nome;
        public $sobrenome;

        function __construct($nome, $sobrenome){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }

        public function apresentar(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <hr>";
        }
    }

    $pessoa1 = new Pessoa('Patrick', 'Martins');
    echo $pessoa1->apresentar();

   class Usuario extends Pessoa{
        public $login;
        public $password;

        function __construct($nome, $sobrenome, $senha){
            parent::__construct($nome, $sobrenome);
            $this->login = strtolower("@{$nome}{$sobrenome}");
            $this->password = $senha;
        }

        public function verDados(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    Login: {$this->login} <br>
                    Password: {$this->password} <hr>";
        }
   }

   $usuario1 = new Usuario('Thais', 'Sena', '123456');
   echo $usuario1->verDados();

