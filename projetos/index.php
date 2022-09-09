<?php

    include_once('Cadastro.php');

    $p = new Cadastro('mysql', 'clientes', 'localhost:3306', 'root', 'Paradoxo@555');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Cadastro de CLientes</title>
    </head>
    <body>
        <table>
            <tr>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>CPF</td>
                <td>EMAIL</td>
                <td>SENHA</td>
            </tr>

            <?php 
                $dados = $p->buscarDados();
                echo '<pre>';
                var_dump($dados);
                echo '</pre>';
                // if(count($dados) > 0){
                //     for ($i=0; $i < count($dados); $i++) { 
                //         echo '<tr>';
                //         foreach($dados as $k => $v){
                //             if($k != 'id'){
                //                 echo "<td>" . $v . "<td>";
                //             }
                //             echo '<td><a href="#">Editar</a><a href="#">Excluir</a>';
                //         }
                //         echo '</tr>';
                //     }
                // }
            ?>
        </table>

       
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>