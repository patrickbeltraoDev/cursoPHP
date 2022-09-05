<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Challenge Table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

        $matrix = [
            ['01', '02', '03', '04', '05'],
            ['06', '07', '08', '09', '10'],
            ['11', '12', '13', '14', '15'],
            ['16', '17', '18', '19', '20'],
        ];
        ?>

        <div class="container">
            <table class="tbl1">

                <?php
                    foreach($matrix as $array){
                        echo "<tr>";
                            foreach($array as $dados){
                                echo "<td>" . $dados . "</td>";
                            }
                        echo "</tr>";
                    } 
                ?>
            
            </table>

            <table class="tbl2">
                <?php 
                    foreach($matrix as $indice => $array){
                        if($indice % 2 == 0){
                            echo "<tr>";
                                foreach($array as $valor){
                                    echo "<td>$valor</td>";
                                }
                            echo "</tr>";
                        }else{
                            echo "<tr class='impar'>";
                                foreach($array as $valor){
                                    echo "<td>$valor</td>";
                                }
                            echo "</tr>";
                        }
                    }
                ?>

            </table>

            <table class="tbl3">
                <?php 
                    foreach($matrix as $indice => $array){
                        echo "<tr>";
                        foreach($array as $valor){
                            if($valor % 2 !== 0){
                                echo "<td style='background-color: #ff0000;'>$valor</td>";
                            }else{
                                echo "<td>$valor</td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
            
            <table class="tbl4">
                <?php 
                    foreach($matrix as $indice => $array){
                        echo "<tr>";
                        foreach($array as $valor){
                            if($valor % 2 == 0){
                                echo "<td style='background-color: #00ff00;'>$valor</td>";
                            }else{
                                echo "<td>$valor</td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
            
        </div>

    </body>
</html>