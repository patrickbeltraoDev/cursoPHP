<?php
    include_once("./template.php")
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
            
            <div class="cabecalho">
                <img class="icons" src="./image/formulario-de-registro.png" alt="">
                <h1>Sobre</h1>
            </div>
            <div class="dados"> 
                <!-- <h2 class="subtitle">Dados Pessoais</h2> -->

                <div class="info">
                    <img src="./image/informacao-pessoal.png" alt="">
                    <p>Brasil, 30 anos, Masculino</p>
                </div>
                
                <div class="info">
                    <img src="./image/endereco.png" alt="">
                    <address>Avenida Bela Vista, Qd: 21, Lt: 1/16 Aparecida de Goiânia - GO</address>
                    <address class="cep">CEP: 74912-261</address>
                </div>

                <div class="info">
                    <img src="./image/marketing-de-email.png" alt="">
                    <a href="mailto:patrick.beltrao@outlook.com" alt="Enviar email">patrick.beltrao@outlook.com</a>
                </div>

                <div class="info">
                    <img src="./image/telefone.png" alt="">
                    <a href="https://wa.me/5562981126578">(62)98112-6578</a>
                </div>
                <div class="info inf">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </main>
    </body>

</html>