<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body{
                display: flex;
                flex-direction: column;
                padding: 40px;
            }

            .header{
                background-color: #444;
                width: 100%;
                height: calc(100vh - 90vh);
            }

            .main{
                background-color: #ddd;
                width: 100%;
                height: calc(100vh - 20vh);
                padding: 60px;
                box-sizing: border-box;
            }

            .cont{
                width: 100%;
                background-color: #dc3545;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            form{
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            form label{
                font-size: 1.2em;
            }

            form input{
                padding: 10px;
            }

            .dados{
                padding: 10px;
                border: 1px solid #333;
                border-radius: 5px;
            }

            .nav ul{
                display: flex;
                justify-content: right;
                padding: 5px;
                margin-right: 30px;
            }

            .nav ul li{
                font-size: 1.2em;
                padding: 10px;
                letter-spacing: 1.2px;
                list-style: none;
                color: #fff;
            }

        </style>

    </head>
    <body>

        <div class="header">
            <?php 
                require_once(__DIR__ . "/teste3.php");
            ?>
        </div>

        <div class="main">
            <div class="cont">
                <?php 
                    require_once(__DIR__ . "/teste2.php");
                ?>
            </div>  
        </div>
        
    </body>
</html>