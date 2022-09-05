<?php
    include_once('./class-Bank.php');
    include_once('./conectar.php');

    function cadastro(){
        global $nome;
        global $sobrenome;
        global $cpf;
        global $tipoConta;

        $cliente = new Bank();
        $cliente->nome = $nome;
        $cliente->sobrenome = $sobrenome;
        $cliente->cpf = $cpf;
        $cliente->tipoConta = $tipoConta;  
        $cliente->saldo = 0;

        $dados = [$cliente->nome, $cliente->sobrenome, $cliente->cpf, $cliente->tipoConta, $cliente->saldo];

        inserirDados($dados);
    }

    
    function inserirDados($array){
        global $link;
        $nome = $array[0];
        $sobrenome = $array[1];
        $cpf = $array[2];
        $tipoConta = $array[3];
        $saldo = $array[4];

        $sql = mysqli_query($link, "INSERT INTO databank.bank (nome, sobrenome, cpf, tipoConta, saldo) 
        VALUES (upper('$nome'), upper('$sobrenome'), upper('$cpf'), upper('$tipoConta'), upper('$saldo'));");
    }

    function visualizarClientes(){
        $sql = mysqli_query($link, "SELECT * FROM databank.bank;");
        print_r($sql);
    }


    // $nome = $_POST['nome'];
    // $sobrenome = $_POST['sobrenome'];
    // $cpf = $_POST['cpf'];
    // $tipoConta = $_POST['tipoConta'];



?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <title>Banco Digital</title>

        <script>
            function chamaFuncCad(){
                var chamaFunc = "<?php cadastro(); ?>";
            }
        
           
        </script>

        
    </head>
    <body>

        <div class="container">
            <div class="title">
                <h1>Banco Digital</h1>
                <h2>Cadastro de Clientes</h2>
            </div>
            <div class="main">
                <form action="#" class="cadastro" method="post">
                    <div class="input-data">
                        <label for="nome">NOME</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div class="input-data">
                        <label for="sobrenome">SOBRENOME</label>
                        <input type="text" name="sobrenome" id="sobrenome" required>
                    </div>
                    <div class="input-data">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" required>
                    </div>
                    <div class="input-data">
                        <label for="tipoConta">TIPO DE CONTA</label>
                        <input type="text" name="tipoConta" id="tipoConta">
                    </div>

                    <button name="cadastrar" onclick="chamaFuncCad()">Cadastrar</button>
                </form>

                <div class="painel">
                    <div class="nav" method="post">
                        <button class="btn" onclick="funcVisualizar()">Visualizar</button>
                        <button class="btn">Saldo</button>
                        <button class="btn">Depositar</button>
                        <button class="btn">Sacar</button>
                    </div>
                    <div class="display">
                        
                    </div>
                </div>
            </div>
        </div>


        <script src="./js/script.js"></script>
    </body>
</html>