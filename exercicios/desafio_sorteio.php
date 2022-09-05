<H1>Desafio Sorteio</H1>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Sorteio</title>
</head>
<body>
    <form action="#" method="post">
        <label for="entrada">Clique para Fazer um novo Sorteio</label>
        <button name="btn">Sortear</button>
    </form>
    
</body>
</html>

<?php  

    $lista_nomes = array(
        "Patrick",
        "Thais",
        "Miguel",
        "Samuel",
        "Dalvina",
        "Edson",
        "Edlâine",
        "Pamella",
        "André",
        "Allen"
    );

    $sorteio = array_rand($lista_nomes);
    print_r($lista_nomes[$sorteio]);