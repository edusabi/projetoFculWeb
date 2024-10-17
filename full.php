<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/full.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <!-- titulo da página -->
    <div class="FullTitleFull">
        <h1>Principais linguagens para Full-Stack</h1>
        <h3>(back-end && front-end)</h3>
    </div>

    <!-- NODE -->

    <div class="divPrinciFull">

        <div class="ImagensDiv">
            <img src="https://miro.medium.com/v2/resize:fit:1200/1*WA_9JsyqFkge2HwYKcdJQw.png" alt="">
            <img src="https://miro.medium.com/v2/resize:fit:900/1*TY9uBBO9leUbRtlXmQBiug.png" alt="">
        </div>

        <div class="textosFull">

    <!-- titulo da linguagem/framework de programaçao -->

            <h1>Node.Js + React</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Node.js é uma plataforma de execução JavaScript para o back-end, enquanto React é uma biblioteca JavaScript para a construção de interfaces de usuário no front-end. Juntos, eles formam um stack popular, permitindo o uso de JavaScript em ambas as camadas.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Ideal para criar aplicativos de página única (SPAs), plataformas em tempo real (como chats, redes sociais), aplicações escaláveis e serviços baseados em microservices.
                </p>
            </div>

            <div>

                <h2>Vantagens:</h2>

                <ol>

                    <li>
                        Mesma linguagem no front e back: JavaScript em ambas as camadas facilita a troca de dados e a manutenção do código.
                    </li>

                    <li>
                        Alto desempenho: O modelo de I/O não bloqueante do Node.js é perfeito para aplicações que precisam lidar com muitas conexões simultâneas, como em tempo real..
                    </li>

                    <li>
                        Ecossistema vasto: Tanto React quanto Node.js têm uma comunidade ativa e grandes repositórios de pacotes (npm), facilitando o desenvolvimento.
                    </li>

                </ol>

            </div>

            <div>

                <h2>Desvantagens:</h2>

                <ol>

                    <li>
                        Modelo assíncrono: O uso de callbacks e Promises no Node.js pode complicar o código, tornando-o mais difícil de depurar em grandes sistemas.
                    </li>

                    <li>
                        Gerenciamento de estado complexo: Em grandes aplicações React, o gerenciamento de estado pode se tornar complicado, exigindo ferramentas adicionais como Redux.
                    </li>

                    <li>
                        Monothread: Node.js é monothread, o que pode ser limitante em processos intensivos de CPU.
                    </li>

                </ol>

            </div>

        </div>

    </div>



    <!-- Python django -->

    <div class="divPrinciFull">

        <div class="ImagensDiv">
            <img src="https://miro.medium.com/v2/resize:fit:1200/1*WA_9JsyqFkge2HwYKcdJQw.png" alt="">
            <img src="https://nyesteventuretech.com/images/django-development.png" alt="">
        </div>

        <div class="textosFull">

    <!-- titulo da linguagem/framework de programaçao -->

            <h1>Django + React</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Django é um framework web completo para Python, enquanto React é uma biblioteca para construção de interfaces de usuário. A combinação de Django no back-end e React no front-end oferece uma solução robusta para desenvolvimento web.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Comumente utilizado em plataformas de e-commerce, sistemas de gerenciamento de conteúdo (CMS), plataformas sociais e aplicações empresariais que exigem uma base de código robusta e segura.
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Desenvolvimento rápido: Django vem com muitas funcionalidades integradas, como autenticação, ORM e administração, o que acelera o desenvolvimento.o.
                    </li>

                    <li>
                        Segurança: Django oferece proteção embutida contra ataques como SQL Injection, Cross-Site Scripting (XSS) e Cross-Site Request Forgery (CSRF).
                    </li>

                    <li>
                        Separação clara de front e back: Usar Django para gerenciar a lógica do servidor e React para interfaces do usuário mantém o código organizado e modular.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Curva de aprendizado: Django pode ser complicado para desenvolvedores iniciantes, devido à quantidade de funcionalidades embutidas.
                    </li>

                    <li>
                        Django é mais pesado: Django pode ser uma escolha pesada para projetos simples, pois traz muitas funcionalidades embutidas que podem não ser necessárias.
                    </li>

                    <li>
                        Performance: Embora eficiente, Python pode não ser tão rápido quanto Node.js em operações de alta concorrência.
                    </li>

                </ol>
            </div>


        </div>

    </div>



    <!-- Java SpringBoot -->

    <div class="divPrinciFull">

        <div class="ImagensDiv">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png" alt="">
            <img src="https://du0ulnyus7r80.cloudfront.net/wp-content/uploads/2020/02/spring-boot-logo-png-4-transparent.png" alt="">
        </div>

        <div class="textosFull">

    <!-- titulo da linguagem/framework de programaçao -->

            <h1>SpringBoot + Angular</h1>

            <div>

                <h2>Descrição:</h2>
                <p>
                    Spring Boot é um framework Java voltado para o back-end, conhecido por sua robustez, enquanto Angular é um framework front-end de código aberto mantido pelo Google, usado para criar interfaces de usuário ricas e dinâmicas.
                </p>

            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Comumente utilizado em aplicações empresariais, sistemas financeiros, grandes plataformas corporativas e aplicações críticas que exigem segurança, escalabilidade e estabilidade.
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Robustez e escalabilidade: Java e Spring Boot são conhecidos por sua capacidade de lidar com grandes volumes de transações e por sua estabilidade em aplicações de grande porte.
                    </li>

                    <li>
                        Estrutura empresarial: Spring Boot facilita o desenvolvimento de APIs complexas e seguras, sendo amplamente utilizado em ambientes corporativos.
                    </li>

                    <li>
                        TypeScript no Angular: Angular usa TypeScript, que adiciona tipagem estática, tornando o desenvolvimento mais robusto e facilitando a manutenção de grandes bases de código.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Curva de aprendizado: Tanto Java/Spring Boot quanto Angular são complexos e têm uma curva de aprendizado acentuada, especialmente para desenvolvedores novos.
                    </li>

                    <li>
                        Tempo de desenvolvimento: Em comparação com stacks mais ágeis, como Node.js, o desenvolvimento com Spring Boot e Angular pode levar mais tempo devido à complexidade.
                    </li>

                    <li>
                        Complexidade excessiva: Pode ser exagerado para projetos menores ou simples, onde a simplicidade e a velocidade são mais importantes do que a robustez.
                    </li>

                </ol>
            </div>


        </div>

    </div>

</body>

</html>