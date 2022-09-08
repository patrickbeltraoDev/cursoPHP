<?php

    Class Login{

        public $nome;
        public $sobrenome;
        public $userName;

        function __construct($nome, $sobrenome){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            // criarUsarName($nome, $sobrenome);
        }

        public function alterarNome($novoNome){
            $this->nome = $novoNome;
        }

        public function alterarSobrenome($novoSobrenome){
            $this->sobrenome = $novoSobrenome;
        }

        public function criarUsarName($nome, $sobrenome){
            $this->userName = "@{$nome}.{$sobrenome}";
        }

        public function apresentar(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    Username: {$this->userName}";
        }

       
    }

    if(isset($_POST['nome'])){
        $name = $_POST['nome'];
        $lastName = $_POST['sobrenome'];

        $user1 = new Login($name, $lastName);
        $user1->criarUsarName($name, $lastName);
    }

    if(isset($_POST['changeName'])){
        $user1->alterarNome($_POST['novoNome']);
        $user1->apresentar();
    }elseif(isset($_POST['changeLastName'])){
        $user1->alterarSobrenome($_POST['novoSobrenome']);
        $user1->apresentar();
    }




?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="#" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome">

            <input type="submit">
        </form>

        <form action="#" method="post">

            <input type="text" name="novoNome" id="novoNome">
            <input type="submit" value="Alterar Nome" name="changeName">
            
            <input type="text" name="novoSobrenome" id="novoSobrenome">
            <input type="submit" value="Alterar Sobrenome" name="changeLastName">
        </form>

        <div class="paine">
            <?php echo $user1->apresentar() ?>
        </div>

    </body>
</html>