<?php	

    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

    function recursive($iArray){
        foreach($iArray as $indice => $dados){
            if(is_numeric($dados)){
                print_r("> $dados <br>");
            }elseif(is_array($dados)){
                foreach($dados as $key){
                    if(is_numeric($key)){
                        print_r(">> $key <br>");
                    }if(is_array($key)){
                        foreach($key as $chave){
                            print_r(">>> $chave <br>");
                        }
                    }
                }
            }       
        }
    }

    echo recursive($array);

    echo "<hr>";

function verificarNivel($iArray, $simbolo = '#'){
    foreach($iArray as $dados){
        if(is_array($dados)){
            verificarNivel($dados, $simbolo . $simbolo[0]);
        }else{
            echo "$simbolo $dados <br>";
        }
    }
}

verificarNivel($array);




























?>
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RECURSIVIDADE</title>

        <style>
            body{
                display: flex;
                align-self: center;
                height: 100vh;
            }
            .container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: #ddd;
                margin: auto;
                padding: 25px;
                width: 400px;
                height: 400px;
                box-shadow: 2px 2px 8px #444;
            }

            .formulario{
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            .formulario label, input{
                text-align: center;
                font-size: 1.6em;
                font-weight: 400;
                margin-bottom: 10px;
            }

            .formulario input:hover{
                background-color: #ccc;
            }

            button{
                width: 40%;
                padding: 15px;
                background-color: lightgreen;
                font-size: 1.2em;
            }


            .visor{
                background-color: lightblue;
                padding: 20px;
                font-size: 1.6em;
                font-weight: 500;
                text-align: center;
            }
            span{
                color: #ff0000;
                font-size: 1.7em;

            }
        </style>

    </head>
    <body>

        <div class="container">
            <form action="#" method="post" class="formulario">
                <label for="recursividade">Recursividade</label>
                <input type="text" name="recursividade">
                <button>Verificar</button>
            </form>
            <div class="visor">
                < ?php echo "A recursividade de {$numero}! = ";
                echo recursivo($numero);?>
            </div>
        </div>
        
    </body>
</html> -->

