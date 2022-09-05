<?php

    $dias_da_semana = ["Domingo", "Segunda-feira", "Terça-feira","Quarta-feira", "Quinta-feira", "Sexta-feira", "Sabádo"];
    echo "<hr>";

    for($i = 0; $i < count($dias_da_semana); $i++){
        print_r($dias_da_semana[$i]);
        echo '<br>';
    }

    echo '<hr>';

?>

<style>
    .display{
        padding: 10px;
        border: 1px solid #000000;
        color: lightblue;
        width: 500px;
    }

</style>
<form method="post" action="#">


    <button>Sortear</button>

    <?php
        $nomes = ["Patrick", "Thiago", "Thais", "Miguel", "Samuel"];

        $sorteio = array_rand($nomes);
        //print_r($nomes[$sorteio]);
        if ($nomes[$sorteio] != "Patrick"){
            echo "<div class= 'display'><h1>$nomes[$sorteio]</h1></div>";
            
        }else{
            echo "<div class='display'><h1>$nomes[$sorteio]: Este usuário não pode ser selecionado, tente outra vez!</h1></div>";
            
        }   
    ?>

</form>



<?php
    echo '<hr>';

    $nome = [
        "nome" => ["Patrick", "Thais", "Dalvina", "Miguel", "Samuel"],
        "sobrenome" => ["Beltrão", "Sena", "Martins", "Martins", "Beltrão"]
        ];
    
    print_r($nome);

    echo '<hr>';
    echo '<br>';

    for ($i = 0; $i < count($nome["nome"]); $i++){
        echo $nome["nome"][$i] .': ' . $nome["sobrenome"][$i];
        echo '<br>';
        
    }

    echo '<hr>';
    echo '<br>';

    $matrix =[
        ["Patrick", "Thais", "Miguel", "Samuel"],
        ["Thiago", "Moreira", "Martins", "Beltrão"]
    ];

    for( $i = 0; $i < count($matrix); $i++){
        for( $x = 0; $x < count($matrix[$i]); $x++){
            echo $matrix[$i][$x] . ' ';
            
        }
        echo '<br>';
    }

    

?>



