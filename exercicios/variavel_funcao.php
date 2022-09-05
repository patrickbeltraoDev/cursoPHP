<?php

    function executar($n1, $n2, $esc){
        global $numero1;
        global $numero2;
        global $escolha;

        $somar = function($n1, $n2){return $n1 + $n2;};
        $multi = function($n1, $n2){return $n1 * $n2;};
        $div = function($n1, $n2){return $n1 / $n2;};
        $sub = function($n1, $n2){return $n1 - $n2;};

        if($escolha == 1){
            $resultado = $somar($numero1, $numero2);
        }else if($escolha == 2){
            $resultado = $sub($numero1, $numero2);
        }else if($escolha == 3){
            $resultado = $multi($numero1, $numero2);
        }else if($escolha == 4){
            $resultado = $div($numero1, $numero2);
        }

        return $resultado;
        
    }

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $escolha = $_POST['escolha'];

    if(isset($_POST['num1'])){
       $res = executar($numero1, $numero2, $escolha);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Anônimas</title>

    <style>
        form{
            width: 400px;
            /* height: 400px; */
            border: 2px solid #ddd;
            background-color: lightblue;
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 15px;
        }
        .title{
            text-align: center;
        }

        .box{
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
            margin-top: 20px;
            
        }

        label{
            font-size: 1.6em;
            font-weight: bolder;
        }

        input, select{
            width: 70%;
            padding: 5px;
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 3px solid #444;
            font-size: 1.6em;
            border-radius: 2px;
        }

        input:hover{
            background-color: #0066ff;
            color: #fff;
        }

        button{
            border-radius: 5px;
            background-color: #0066ff;
            padding: 5px;
            font-size: 1.2em;
            color: #fff;
        }

        button:hover{
            background-color: #ff0000;
        }

        .display{
            width: 70%;
            background-color: #0033ff;
            padding: 10px;
            font-size: 1.4em;
            color: #fff;
            border-radius: 10px;
        }

    </style>

</head>
<body>

    <form action="#" method="post" class="container">
        <div class="title">
            <h1>Mini - Calculadora</h1>
        </div>
        <div class="box">
            <label for="numero1">Número 1:</label>
            <input type="text" name="num1">
        </div>
        <div class="box">
            <label for="numero2">Número 2:</label>
            <input type="text" name="num2">
        </div>
        <div class="box">
            <label for="escolha">Escolha a Operação</label>
            <select name="escolha" id="">
                <option value="0"></option>
                <option value="1">Somar</option>
                <option value="2">Subtrair</option>
                <option value="3">Multiplicar</option>
                <option value="4">Divisão</option>
            </select>
        </div>

        <div class="box">
            <button>Executar</button>
        </div>

        <div class='box'>
            <div class='display'>
                <?php echo $res ?>
            </div>
        </div>
    </div>
    
</body>
</html>