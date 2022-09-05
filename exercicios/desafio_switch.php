<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades</title>

    <style>
        body{
            margin: 0;
        }

        .container{
            width: 100%;
            background-color: skyblue;
            display: flex;
            flex-direction: column;
        }

        .conversor{
            
            width: 100%;
            height: 300px;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            
            

        }

        .form-converte{
            padding: 30px;
            width: 50%;
            display: flex;
            border-radius: 10px;
            flex-direction: column;
            justify-content: center;
            flex-wrap: nowrap;
            border: 1px solid black;


        }

        .form-converte  label{
            font-size: 1.8em;
            padding: 5px;
        }

        .entrada{
            display: flex;
            flex-direction: column;
            margin-left: 10px;

        }

        .selecao{
            display: flex;
            flex-direction: column;
        }


        .display{

            background-color: #fff;
            width: 300px;
            height: 200px;
            border-radius: 10px;
            border: 1px solid black;
            
            
        }

        input[type=text]{
            padding: 11px;
            font-size: 19px;
            text-align: left;
            border-width: 5px;
            border-radius: 15px;
            border-style: inset;
            margin-top: 10px;
        }

        #conv{
            padding: 11px;
            font-size: 19px;
            text-align: left;
            border-width: 5px;
            border-radius: 15px;
            border-style: outset;
            margin-top: 10px;
        }

        button{
            margin-top: 10px;
            width: 150px;
            height: 80px;
            border-radius: 10px;

        }

        p{
            font-size: 1.8rem;
        }
        
        
    </style>

</head>
<body>

    <div class="container">
        <h1>Conversor de Unidades</h1>
        <div class="conversor">
            <form action="#"  method="post" class="form-converte">
                <div class="entrada">
                    <label for="valores">Digite o Valor a ser Convertido</label>    
                    <input type="text" name="valores" placeholder="Digite o valor aqui">
                </div>

                <div class="selecao">
                    <label for="conv">Escolha a Unidade de Medida</label>
                    <select name="conv" id="conv">
                        <option value="km-milha">Km > Milha</option>
                        <option value="milha-km">Milha > Km</option>
                        <option value="km-metros">Km > Metros</option>
                        <option value="metros-km">Metros > Km</option>
                        <option value="celcius-fahrenheit">Celcius > Fahrenheit</option>
                        <option value="fahrenheit-celcius">Fahrenheit > Celcius</option>
                    </select>
                </div>

                <button>Converter</button>
            </form>

            <div class="resultado">
                <div class="display">

                </div>
            </div>
        </div>
    </div>

    
</body>
</html>

<?php
$valor_entrada = $_POST['valores'];
$opcao = $_POST['conv'];
$resultado = 0.0;
const CONVERSOR_C_F = (9/5) + 32;
const CONVERSOR_F_C = 32 * (5/9);

switch($opcao){
    case 'km-milha':
        $resultado = $valor_entrada * 0.62137;
        echo "<p> $valor_entrada Kilometro(s) convertido para Milha(s): $resultado Mi";
        break;
    case 'milha-km':
        $resultado = $valor / 0.62137;
        echo "<p> $valor_entrada Milha(s) convertido para Kilometro(s): $resultado Km";
        break;
    case 'km-metros':
        $resultado = $valor_entrada * 1000;
        echo "<p> $valor_entrada Kilomentro(s) convertido para Metro(s): $resultado M";
        break;
    case 'metros-km':
        $resultado = $valor_entrada / 1000;
        echo "<p> $valor_entrada Metro(s) convertido para Kilometro(s): $resultado Km";
        break;
    case 'celcius-fahrenheit':
        $resultado = $valor_entrada * CONVERSOR_C_F;
        echo "<p> $valor_entrada Celcius convertido para Fihrenheit: $resultado °F";
        break;
    case 'fahrenheit-celcius':
        $resultado = $valor_entrada - CONVERSOR_F_C;
        echo "<p> $valor_entrada Fahrenheit convertido para Celcius: $resultado °C";
        break;
    default;
    }

// echo "<p> $valor_entrada convertido para $opção = $resultado";
