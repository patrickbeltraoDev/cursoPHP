<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPLATE</title>

    <style>
        html, body{
            padding: 0;
            margin: 0;
        }

        .container{
            padding: 10px;
            font-size: 25px;
        }

        main{
            border: 3px solid lightblue;
            grid-area: conteudo;
        }

        header{
            border: 3px solid purple;
            grid-area: cabecalho;
        }

        nav{
            border: 3px solid lightgreen;
            grid-area: navegacao;
        }

        footer{
            border: 3px solid orange;
            grid-area: rodape;
        }

        body{
            display: grid;
            grid-gap: 10px;
            min-height: 100vh;
            grid-template-columns: .5fr 1fr;
            grid-template-rows: 100px 1fr 100px;
            grid-template-areas: 
                'cabecalho cabecalho'
                'navegacao conteudo'
                'rodape rodape';
        }

        @media(max-width: 700px){
            body{
                grid-template-columns: 1fr;
                grid-template-rows: 80px 80px 1fr 100px;
                grid-template-areas: 
                    'cabecalho'
                    'navegacao'
                    'conteudo'
                    'rodape';
            }
        }


    </style>
</head>
<body>

    <main class="container">CONTEÚDO</main>
    <header class="container">CABEÇALHO</header>
    <nav class="container">NAVEGAÇÃO</nav>
    <footer class="container">RODAPÉ</footer>

</body>
</html>