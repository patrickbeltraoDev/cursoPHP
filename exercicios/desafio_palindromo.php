<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio Palindromo</title>

        <style>
            body{
                display: flex;
                align-items: center;
                background-color: #ddd;
            }
            input{
                border-top: none;
                border-left: none;
                border-right: 2px solid #ddd;
                border-bottom: 2px solid #ddd;
                padding: 5px;
                background-color: #F0FFF0;
                border-radius: 3px;
                margin-top: 10px;
                width: 80%;
                font-size: 1.4em;
                box-shadow: 2px 2px 3px #ddd;
            }

            label{
                font-size: 1.2em;
                font-weight: bolder;
            }

            .container{
                border-radius: 10px;
                border: 2px solid #ddd;
                padding: 25px;
                width: 550px;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #fff;
                margin: 200px auto;
            }

            .display{
                width: 80%;
                font-size: 1.4em;
                background-color: #E0FFFF;
                padding: 5px;
                margin-top: 20px;
                box-shadow: 2px 2px 3px #ddd;
                text-align: center;
            }

            button{
                padding: 5px;
                background-color: #E0FFFF;
                border: none;
                margin-top: 25px;
                font-size: 1.4em;
                border-radius: 5px;
            }

            button:hover{
                background-color: #D8BFD8;
            }

        </style>

    </head>
    <body>

        <form method="post" action="#" class="container">
            <h1>Verificar se a Palavra é um Palindromo</h1>
            <label for="palavra">Digite a Palavra</label>
            <input type="text" id="palavra" name="input">
            <button>Verificar</button>
            <div class="display" id="display">
                <?php
                    $string = $_POST['input'];

                    function verificar($palavra){
                        $corrigida = strtolower($palavra);
                        if($corrigida == strrev($corrigida)){
                            echo "Esta palavra é um Palindromo!!!";
                        }else{
                            echo "Esta palavra não é um Palindromo!!!";
                        }
                    }

                    verificar($string);
                ?>
            </div>
        </form>
    </body>
</html>