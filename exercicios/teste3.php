<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            display: flex;
            flex-direction: column; 
            align-items: center;
            margin: auto;
        }

        .inp{
            font-size: 1.4em; 
            border-bottom: 2px solid #808080;
            border-left: none;
            border-right: none;
            border-top: none;
            background-color: #F8F8FF;
            border-radius: 3px;
            padding: 5px;
            width: 200px;
            margin-top: 200px;

        }

        label{
            padding: 10px;
            background-color: #ddd;
            font-size: 1.2em;
        }

        input[type="radio"]{
            display: none;
        }

        input[type="radio"]:checked + label{
            background-color: #fff;
        }

        div{
            border: 1px solid #444;
            background-color: lightblue;
            padding: 15px;
        }

        



    </style>
</head>
<body>
    <input type="text" class="inp">
    <br>
    <br>  
    <br>
    <br>
    <br>
    <div>
        <input type="radio" class="radio" id="sim" name="radio">
        <label for="sim">Sim</label>
        <input type="radio" class="radio" id="nao" name="radio">
        <label for="nao">Não</label>
    </div>
    
</body>
</html>