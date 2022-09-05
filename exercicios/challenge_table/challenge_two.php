<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Two</title>

    <style>
        form{
            grid-column: 1 / 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 5px;
            border: 1px solid #444;
            width: 300px;
            height: 320px;
            padding: 20px;

        }

        input{
            background-color: #ddd;
            border-radius: 5px;
            padding: 5px;
            width: 250px;
        }

        input:hover{
            background-color: #fff;
        }

        label{
            padding: 5px;
            font-size: 1.4em;
            margin-top: 10px;

        }

        .submit{
            width: 100px;
            padding: 5px;
            background-color: lightblue;
            font-size: 1.4em;
            margin-top: 20px;

        }

        .submit:hover{
            background-color: #00ff00;
        }

        body{
            display: grid;
            grid-template-columns: 450px 1fr;
            grid-template-rows: 1fr;
            padding: 30px;
        }

        table{
            grid-column: 2 / 3;
            border: 2px solid #444;
        }

        td{
            border-collapse: collapse;
            border: 2px solid #444;
            text-align: center;
            font-size: 1.6em;
            font-weight: bolder;
        }

        select{
            background-color: #ddd;
            border-radius: 5px;
            padding: 5px;
            width: 250px;
            margin-top: 20px;
            font-size: 1.4em;
        }

        .cor1{
            background-color: #00ff00;
        }
        .cor2{
            background-color: #0000ff;
        }

        div{
            padding: 7px;
            border: 1px solid lightblue;
            margin-top: 20px;
        }

        input[type="radio"]{
            display: none;
        }

        .lb-radio{
            background-color: #ddd;
        }

        .lb-radio:hover{
            background-color: lightblue;
        }

        input[type="radio"]:checked + label{
            background-color: #1E90FF;
        }



        

    </style>

</head>
<body>

    <form action="#" method="post">
        <label for="row">Digite a quantidade de linhas:</label>
        <input type="text" name="row">

        <label for="column">Digite a quantidade de Colunas:</label>
        <input type="text" name="column">

        <div>
            <input type="radio" name="radio" id="radio1" value="1">
            <label for="radio1" class="lb-radio">Impares</label>

            <input type="radio" name="radio" id="radio2" value="2">
            <label for="radio2" class="lb-radio">Pares</label>
        </div>

        <!-- <select name="select" id="">
            <option value="0"></option>
            <option value="1">Impares</option>
            <option value="2">Pares</option>
        </select> -->

        <button class="submit">Enviar</button>
    </form>

    <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        $num = 1;
        $res = $_POST['radio'];

        echo "<table>";
            for($i = 0; $i < $row; $i++){
                echo "<tr>";
                    for($x = 0; $x < $column; $x++){
                        if($res == 1){
                            if($num % 2 !== 0){
                                echo "<td class='cor1'>$num</td>";
                            }else{
                                echo "<td>$num</td>";
                            }
                        }elseif($res == 2){
                            if($num % 2 == 0){
                                echo "<td class='cor2'>$num</td>";
                            }else{
                                echo "<td>$num</td>";
                            }
                        }else{
                            echo "<td>$num</td>";
                        }
                        $num++;
                    }
                echo "</tr>";
            }
        echo "</table>";
    ?>
    
</body>
</html>