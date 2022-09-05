<?php

    include('./conectar.php');

    if(isset($_POST['cadastrar'])){
        $name = $_POST['name'];
        $senha = $_POST['senha'];
        $user = $_POST['user'];

        $query = mysqli_query($link, "INSERT INTO teste (nome, user, senha) VALUES ('$name', '$user', '$senha')");

        if($query){
            echo 'Cadastro realizado com Sucesso!!!';
        }else{
            echo 'Cadastro não Realizado!!!';
        }
    }

    if(isset($_POST['login'])){
        $senhaLogin = $_POST['senhaLogin'];
        $userLogin = $_POST['userLogin'];

        // echo "$senhaLogin <br>";
        // echo "$userLogin <br>";

        $query = mysqli_query($link, "SELECT * FROM teste where user = '$userLogin'");
        foreach($query as $dados){
            // print_r($dados['nome']);
            if(($dados['user'] && $dados['senha']) == ($userLogin && $senhaLogin)){
                echo "Nome: " . $dados['nome'];
            }
        }
       
    }



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .cadastro{
                border: 2px solid #ddd;
                padding: 20px;
                display: flex;
                flex-direction: column;
                width: 350px;
                text-align: center;
            }

            label{
                margin: 5px;
                font-size: 1.6em;
            }
            input{
                margin: 5px;
                font-size: 1.6em;
                text-align: center;
            }
        </style>

    </head>

    <body>

    <form action="#" method="post" class="cadastro">
        <h1>Cadastro</h1>
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <label for="user">User:</label>
        <input type="text" name="user">
        <label for="senha">Passoword:</label>
        <input type="password" name="senha">
        <input type="submit" name="cadastrar">
    </form>

    <div>
        <form action="#" method="post" class="cadastro">
            <h1>Login</h1>
            <label for="user">User:</label>
            <input type="text" name="userLogin">
            <label for="senha">Passoword:</label>
            <input type="password" name="senhaLogin">
            <input type="submit" name="login">
        </form>

        <div class="visor">
           <!-- < ?php echo "Nome:  $retorno";?> -->
        </div>
    </div>
    
        
    </body>
</html>