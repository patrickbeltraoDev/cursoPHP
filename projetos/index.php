<?php

    include_once('Cadastro.php');

    // $sgbd = 'mysql';
    // $dbname = '';
    // $host = 'localhost:3306';
    // $user = 'root';
    // $password = 'Paradoxo@555';

    $sgbd = 'mysql';
    $dbname = 'pci';
    $host = '172.30.200.91:3306';
    $user = 'patrick.beltrao';
    $password = 'PCI2022@qualidade#';

    $p = new Cadastro("$sgbd", "$dbname", "$host", "$user", "$password");

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
            <thead>
                <tr>
                    <th>TR</th>
                    <th>NOME</th>
                    <th>UF</th>
                    <th>CIDADE</th>
                    <th>ENDEREÇO</th>
                    <th>ACESSO REF</th>
                    <th>CDO REF</th>
                    <th>PROBLEMA</th>
                    <th>EQUIPE</th>
                    <th>DATA CADASTRO</th>
                    <th>STATUS</th>
                    <th>OBSERVAÇÃO</th>
                    <th>PRAZO RETORNO</th>
                </tr>   
            </thead>
            <tbody>
                <?php 
                    $dados = $p->buscarDados();
                    // echo '<pre>';
                    // print_r($dados);
                    // echo  '<br>';
                    // echo '</pre>';
                    if(count($dados) > 0){
                        for ($i=0; $i < count($dados); $i++) { 
                            echo "<tr>";
                            foreach($dados[$i] as $k => $v){
                                if($k != 'id'){
                                    echo "<td>" . $v . "</td>";
                                }
                            }
                            echo '<td><a href="#">Editar</a><a href="#">Excluir</a>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>

       
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>