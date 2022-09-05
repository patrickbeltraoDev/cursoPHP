<form action="" method="post">
    <div style="background-color: orange; width: 500px; padding: 20px; border: 1px solid;">
        <label for="" style="font-size: 40px;">Informe a sua Idade:</label>
        <br><br>
        <input type="text" name="int" style="width: 300px; height: 30px;">
        <!-- <button>Enviar</button> -->
    </div>
</form>

<?php
    $idade = $_POST['int'];
    if ($idade < 18){
        echo 'Você é menor de idade';
    }else{
        echo 'Você é maior de idade';
    }

?>;

<br>
<br>
<br>
<br>

<div style="background-color: lightblue; width: 500px; padding: 20px; border: 1px solid;">
    <form action="" method="post">
        <input type="text" name="categoria">
    </form>
    
</div>

<?php

$categoria = $_POST['categoria'];
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo'){
    $preco = 250000;
    $carro = 'Mercedes';
}elseif ($categoria === 'SUV'){
    $preco = 80000;
    $carro = 'Renegade';
}elseif ($categoria === 'Sedan'){
    $preco = 55000;
    $carro = 'Etios';
}else {
    $preco = 33000;
    $carro = 'Mobi';
}


$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro <br> Preço: R$ $precoFormatado </p>";

echo '<br>','<br>','<br>','<br>';
?>





<div style="background-color: skyblue; width: 500px; padding: 20px; border: 1px solid;">
    <form action="" method="post">
        <Label>Escolha a Categoria do Carro:</Label>
        <input type="text" name="cat">
    </form>
</div>

<?php
$categoria = $_POST['cat'];
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)){
    case 'luxo':
        $preco = 500000;
        $carro = 'LandRover';
        break;
    case 'suv':
        $preco = 250000;
        $carro = 'Tucson';
        break;
    case 'sedan':
        $preco = 100000;
        $carro = 'Corola';
        break;
    case 'Hatch':
        $preco = 50000;
        $carro = 'Onix';
        break;
    default;
    
}

$preco_formatado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro <br> Preço: $preco_formatado </p>";
?>









