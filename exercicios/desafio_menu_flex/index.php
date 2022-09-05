<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Menu Flex</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <nav class="nav">
           
            <div class="bar">
                <ul class="menu">
                    <a href="#cont_main_1"><li>Sobre Nós</li></a>
                    <a href="#cont_main_2"><li>Serviços</li></a>
                    <a href="#"><li>Contatos</li></a>
                    <a href="#"><li>Fazer Orçamento</li></a>
                </ul>

                <ul class="login">
                    <a href="#"  class="cadastro"><li>Cadastre-se</li></a>
                    <a href="#"  class="cadastro"><li>Login</li></a>
                </ul>
            </div>

            <div class="fly">
                <div>
                    <p class="texto">Desenvolvimento de soluções sob medida para o seu negócio.</p>
                    <div class="find"><a href="#">Fale Conosco</a></div>
                </div>
            </div>

            <img src="./imagens/close-up-man-wearing-vr-glasses.jpg" alt="" class="img_bgd">

        </nav>

        <main>
            <div class="cont_main_1" id="cont_main_1">
                <div class="cont1">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/tcLLTsP3wlo" 
                        title="Evolução das tecnologias na educação" frameborder="0" allow="accelerometer; 
                        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>

                    <div class="div-info">
                        <h1>Quem Somos</h1>
                        <p>
                            O desenvolvimento da tecnologia emerge os seres humanos num universo cada vez 
                            mais desconhecido e que continua a crescer. O livre acesso aos meios tecnológicos
                            determina a proximidade entre as diferentes áreas do conhecimento, o que acaba por
                            juntar novas realidades e construir novas relações interdisciplinares.
                        </p>
                    </div>
                </div>

            </div>

            <div class="cont_main_2" id="cont_main_2">
                <div class="cont3">
                    <h1>Nossos Serviços</h1>
                </div>
                <div class="cont2">
                    <div class="cards">
                        <img src="./imagens/desenvolvimento-web-engenharia-de-programador-e-site-de-codificacao-em-telas-de-interface-de-realidade-aumentada-desenvolvedor-de-projeto-engenheiro-de-programacao-de-software.jpg" alt="">
                        <!-- <h1>PLATAFORMA DESKTOP E WEB</h1> -->
                        <p class="parag">Nossos softwares são desenvolvidos para WEB e DESKTOP com as mais modernas 
                        tecnologias do mercado, com foco em performance, segurança e escalabilidade
                        </p>
                    </div>
                    <div class="cards">
                        <h1>APLICATIVOS NATIVOS</h1>
                        <p class="parag">Desenvolvemos aplicações nativas com ferramentas robustas e modernas, com foco em usabilidade, 
                        performance e experiência do usuário
                        </p>
                    </div>
                    <div class="cards">
                        <h1>APLICAÇÕES PWA</h1>
                        <p class="parag">Transformando aplicações WEB em aplicativos, o PWA tem um baixo custo de desenvolvimento e oferece 
                        facilidade, performance e funcionalidades de uma aplicação nativa
                        </p>
                    </div>
                    <div class="cards">
                        <h1>SOFTWARE PERSONALIZADO</h1>
                        <p class="parag">Estamos preparados para você, conte com nossa expertise para integrar a nossa tecnologia em sua empresa</p>
                    </div>
                    <div class="cards">
                        <h1>INTEGRAÇÕES COM AMBIENTES</h1>
                        <p class="parag">Soluções para linha de produção e montagem, integrada com qualquer dispositivo ja existente (balanças, esteiras, leitores …)</p>
                    </div>
                    <div class="cards">
                        <h1>AUDITORIA E INVENTÁRIOS DE SOFTWARE</h1>
                        <p class="parag">Consultoria especializada em tecnologia para ajudar você e sua empresa a encontrar as melhores soluções</p>
                    </div>
                </div>

            </div>

            
            
            
        </main>

    </div>
    

    
</body>
</html>