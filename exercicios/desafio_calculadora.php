<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .container{
            background-color: #2E2E2E;
            border-radius: 10px;
            width: 360px;
            height: 400px;
            margin: auto;
            padding: 15px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .display{
            background-color: #bbd0bf;
            width: 100%;
            height: 60px;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 1.8em;
            font-weight: bolder;
            color: #000;
            padding: 5px;
            display: flex;
            justify-content: right;
            align-items: center;
                
        }

        .teclado{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .teclas{
            width: 70px;
            height: 50px;
            background-color: #eaeaea;
            text-align: center;
            color: #000;
            font-size: 1.6em;
            font-weight: bolder;
            border-radius: 10px;
            margin: 5px;
            padding: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .teclas:hover{
            background-color: #99c089;
        }

        .igual{
            background-color: #f2a64b;
            order: 1;
        }

        .n7{
            order: -16;
        }
        .n8{
            order: -15;
        }
        .n9{
            order: -14;
        }
        .divisao{
            order: -13;
        }
        .n4{
            order: -12;
        }
        .n5{
            order: -11;
        }
        .n6{
            order: -10;
        }
        .multi{
            order: -9;
        }
        .n1{
            order: -8;
        }
        .n2{
            order: -7;
        }
        .n3{
            order: -6;
        }
        .menos{
            order: -5;
        }
        .n0{
            order: -4;
        }
        .ponto{
            order: -3;
        }
        .mais{
            order: -2;
        } 
    </style>

</head>
<body>


    <div class="container">
        <div class="display">1</div>
        <form method="post" class="teclado">
            <button name="zero" value="0" class="teclas n0">0</button>
            <button name="1" class="teclas n1">1</button>
            <button name="2" class="teclas n2">2</button>
            <button name="3" class="teclas n3">3</button>
            <button name="4" class="teclas n4">4</button>
            <button name="5" class="teclas n5">5</button>
            <button name="6" class="teclas n6">6</button>
            <button name="7" class="teclas n7">7</button>
            <button name="8" class="teclas n8">8</button>
            <button name="9" class="teclas n9">9</button>
            <button name="mais" class="teclas mais">+</button>
            <button name="menos" class="teclas menos">-</button>
            <button name="multi" class="teclas multi">*</button>
            <button name="divisao" class="teclas divisao">/</button>
            <button name="igual" class="teclas igual">=</button>
            <button name="ponto" class="teclas ponto">.</button>
        </post>
    </div>
    
</body>
</html>