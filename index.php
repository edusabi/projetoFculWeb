<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/index.css">
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="DivHomePrinc">

        <div class="titleHome">

            <!-- Titulo e subtitulo -->
            <h2>Olá, seja bem vindo!</h2>
            <p>Aqui nesse site você poderá ver as principais linguagens de programação mais utlizadas tanto no Front-End como no Back-End e também Full-Stack.</p>

            <!-- Imagens rodando na tela home -->
            <div class="rotate-images">

                <img src="https://miro.medium.com/v2/resize:fit:1200/1*WA_9JsyqFkge2HwYKcdJQw.png" alt="" style="width: 70px;" class="react">

                <img src="https://www.dotcom-monitor.com/wp-content/uploads/sites/3/2020/05/Vue-logo-1.png" alt="" style="width: 60px;" class="vue">

                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png" alt="" class="angular">

                <img src="https://du0ulnyus7r80.cloudfront.net/wp-content/uploads/2020/02/spring-boot-logo-png-4-transparent.png" alt="" style="width: 90px;" class="spring">

                <img src="https://nyesteventuretech.com/images/django-development.png" alt="" style="width: 70px;" class="django">

                <img src="https://miro.medium.com/v2/resize:fit:900/1*TY9uBBO9leUbRtlXmQBiug.png" alt="" class="node">

            </div>

        </div>



        <div class="container-slideshow">
            <div class="slide">
                <h1>React</h1>
                <img src="https://miro.medium.com/v2/resize:fit:1200/1*WA_9JsyqFkge2HwYKcdJQw.png" alt="Slide 1">
            </div>

            <div class="slide">
                <h1>Spring Boot</h1>
                <img src="https://du0ulnyus7r80.cloudfront.net/wp-content/uploads/2020/02/spring-boot-logo-png-4-transparent.png" alt="Slide 2">
            </div>

            <div class="slide">
                <h1>Vue</h1>
                <img src="https://www.dotcom-monitor.com/wp-content/uploads/sites/3/2020/05/Vue-logo-1.png" alt="Slide 3">
            </div>

            <div class="slide">
                <h1>Angular</h1>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png" alt="Slide 3">
            </div>

            <div class="slide">
                <h1>Node</h1>
                <img src="https://miro.medium.com/v2/resize:fit:900/1*TY9uBBO9leUbRtlXmQBiug.png" alt="Slide 3">
            </div>

            <button class="anterior" onclick="mudarSlide(-1)">&#10094;</button>
            <button class="proximo" onclick="mudarSlide(1)">&#10095;</button>
        </div>

        <div class="outrasLinguagens">
            <h1>Outras linguagens comumente usadas em desenvolvimento web!</h1>
            <button>Clique aqui para ver</button>
        </div>

    </div>

        <div class="modalLinguagens">
                <p class="closeModal">X</p>

                <div>
                    <h2>TypeScript</h2>
                    <p>É extremamente popular, especialmente em conjunto com Node.js no back-end e frameworks como Next.js no front-end. TypeScript é amplamente adotado devido à tipagem estática, oferecendo maior segurança no desenvolvimento.</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/1200px-Typescript_logo_2020.svg.png" alt="">
                </div>
                
                <div>
                    <h2>Laravel</h2>
                    <p> PHP continua a ser uma das linguagens mais usadas para desenvolvimento full-stack, principalmente em conjunto com o framework Laravel. Ele é muito utilizado para criar aplicações web dinâmicas, como sistemas de gerenciamento de conteúdo e plataformas de e-commerce.</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="">
                </div>
                
                <div>
                    <h2>Flask</h2>
                    <p>É extremamente popular, especialmente em conjunto com Node.js no back-end e frameworks como Next.js no front-end. TypeScript é amplamente adotado devido à tipagem estática, oferecendo maior segurança no desenvolvimento.</p>
                    <img src="https://blog.appseed.us/content/images/2023/10/cover-flask.jpg" alt=""  style="width: 90px;">
                </div>
                
                <div>
                    <h2>Ruby on Rails</h2>
                    <p>Um framework popular para desenvolvimento de aplicações web, utilizado por muitas startups devido à sua rapidez e facilidade de uso.</p>
                    <img src="https://swiftlet.co.th/wp-content/uploads/2019/05/What-is-Ruby-on-Rails-1-1.png" alt=""  style="width: 90px;">
                </div>
                
                <div>
                    <h2>Golang</h2>
                    <p>Está crescendo no desenvolvimento web, especialmente em APIs e microsserviços, devido à sua alta performance e simplicidade.</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Go_Logo_Blue.svg/1200px-Go_Logo_Blue.svg.png" alt="">
                </div>
                
                <div>
                    <h2>ASP.NET Core (C#)</h2>
                    <p>Muito usado em grandes corporações para criar aplicações web robustas e escaláveis, especialmente no ambiente Microsoft.</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/2048px-.NET_Core_Logo.svg.png" alt="" >
                </div>
                

        </div>

    <script>
        let indiceSlide = 0; // Índice para controlar qual slide está ativo
        mostrarSlide(indiceSlide); // Mostra o slide inicial

        // Função para mudar de slide quando o botão "anterior" ou "próximo" é clicado
        function mudarSlide(direcao) {
            indiceSlide += direcao; // Incrementa ou decrementa o índice de acordo com a direção (1 para próximo, -1 para anterior)
            if (indiceSlide < 0) indiceSlide = 4; // Se for menor que 0, volta para o último slide
            if (indiceSlide > 4) indiceSlide = 0; // Se for maior que o último slide, volta para o primeiro
            mostrarSlide(indiceSlide); // Atualiza o slide mostrado
        }

        // Função para exibir o slide baseado no índice
        function mostrarSlide(indice) {
            let slides = document.getElementsByClassName("slide"); // Seleciona todos os slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; // Esconde todos os slides
            }
            slides[indice].style.display = "block"; // Mostra apenas o slide correspondente ao índice
        }

        // Faz com que o slideshow mude automaticamente a cada 5 segundos
        setInterval(() => mudarSlide(1), 5000);
    </script>
    <script src="js/modais.js"></script>
</body>

</html>