<?php	

    // 5! = 120
    //     5 * 4! (24) = 120
    //         4 * 3! (6) = 24
    //             3 * 2! (2) = 6
    //                 2 * 1! (1) = 2
    //                     1 * 1
    $recursivo = $_POST['recursividade'];

    function recursivo($recur){
        global $recursivo;
        $num = 1;
    
        for($i=1; $i<=$recursivo; $i++){
            $x =  $i * $num;
            $num = $x; 
        }
        return $num;
    }
?>
<!DOCTYPE html>
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
                <?php echo "A recursividade de {$recursivo}! = ";
                echo recursivo($recursivo);?>
            </div>
        </div>
        
    </body>
</html>

