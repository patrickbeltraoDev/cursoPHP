<?php

    Class Login{

        public $nome;
        public $sobrenome;
        public $userName;

        public function alterarNome($novoNome){
            $this->nome = $novoNome;
        }

        public function alterarSobrenome($novoSobrenome){
            $this->sobrenome = $novoSobrenome;
        }

        function criarUsarName($nome, $sobrenome){
            $this->userName = "@{$nome}.{$sobrenome}";
        }

        public function apresentar(){
            return "Nome: {$this->nome} <br>
                    Sobrenome: {$this->sobrenome} <br>
                    Username: {$this->userName}";
        }

        function __construct($nome, $sobrenome){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            criarUsarName($nome, $sobrenome);
        }
    }

    if(isset($_POST['nome'])){
        $name = $_POST['nome'];
        $lastName = $_POST['sobrenome'];

        $user1 = new Login($name, $lastName);
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

        <div class="paine">
            <?php echo $user1->apresentar() ?>
        </div>

    </body>
</html>