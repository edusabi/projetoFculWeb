<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/back.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="TitleBack">
        <h1>Principais linguagens para Back-End</h1>
    </div>

    <!-- NODE -->

    <div class="divPrinciBack">

        <div>
            <img src="https://miro.medium.com/v2/resize:fit:900/1*TY9uBBO9leUbRtlXmQBiug.png" alt="">
        </div>

        <div class="textosBack">

    <!-- titulo da linguagem/framework de programaçao -->

            <h1>Node.Js</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Node.js é um ambiente de execução JavaScript no servidor, que permite usar JavaScript tanto no front-end quanto no back-end. Ele é baseado no mecanismo V8 do Google e é ideal para construir aplicativos de rede, especialmente aqueles que exigem alta escalabilidade.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Muito usado para criar APIs, servidores web, aplicativos em tempo real (como chats e jogos online), microsserviços e serviços de streaming.
                </p>
            </div>

            <div>

                <h2>Vantagens:</h2>

                <ol>

                    <li>
                        Mesma linguagem no front e back: Usar JavaScript tanto no cliente quanto no servidor facilita o compartilhamento de código e a manutenção.
                    </li>

                    <li>
                        Alta escalabilidade: Ideal para aplicações que precisam lidar com várias conexões simultâneas, como chats e APIs.
                    </li>

                    <li>
                        Ecossistema vasto: O NPM oferece uma imensa variedade de pacotes e bibliotecas para acelerar o desenvolvimento.
                    </li>

                    <li>
                        Aplicações em tempo real: Perfeito para desenvolvimento de aplicações em tempo real, como chats ou colaboração em tempo real.
                    </li>

                </ol>

            </div>

            <div>

                <h2>Desvantagens:</h2>

                <ol>

                    <li>
                        Modelo assíncrono: O uso de callbacks e Promises pode tornar o código mais difícil de ler e manter, especialmente em aplicações complexas.
                    </li>

                    <li>
                        Não bloqueante: Apesar de ser uma vantagem em muitos casos, o modelo não bloqueante de I/O pode ser difícil de entender e depurar para iniciantes.
                    </li>

                    <li>
                        Monothread: Node.js é monothread, o que pode causar problemas de desempenho em aplicações intensivas em CPU.
                    </li>

                </ol>

            </div>

        </div>

    </div>



    <!-- Python django -->

    <div class="divPrinciBack">

        <div>
            <img src="https://nyesteventuretech.com/images/django-development.png" alt="">
        </div>

        <div class="textosBack">

        <!-- titulo da linguagem/framework de programaçao -->

            <h1>Django</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Django é um framework de código aberto baseado em Python, desenvolvido para facilitar a criação de aplicações web rápidas e seguras. Ele segue o padrão arquitetônico Model-View-Template (MVT) e fornece uma série de ferramentas integradas para autenticação, gerenciamento de banco de dados e muito mais.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    É amplamente utilizado para criar APIs RESTful, sistemas de gerenciamento de conteúdo (CMS), sites de e-commerce, plataformas de redes sociais e aplicações empresariais.
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Framework completo: O Django oferece uma solução pronta para uso, com segurança integrada, autenticação, ORM, roteamento, formulários e administração.
                    </li>

                    <li>
                        Comunidade ativa: Grande comunidade de desenvolvedores e documentação abrangente.
                    </li>

                    <li>
                        Escalabilidade: Embora adequado para pequenas aplicações, também pode escalar para grandes sistemas.
                    </li>

                    <li>
                        Segurança: O Django vem com práticas de segurança embutidas, como proteção contra ataques CSRF, SQL Injection e XSS.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Curva de aprendizado: Embora Python seja simples, Django tem uma curva de aprendizado acentuada devido à quantidade de funcionalidades integradas.
                    </li>

                    <li>
                        O desempenho: Pode não ser tão eficiente em termos de performance em comparação com soluções minimalistas..
                    </li>

                    <li>
                        Padrão "baterias incluídas": Pode ser excessivo para projetos menores ou que precisem de menos funcionalidades embutidas.
                    </li>

                </ol>
            </div>


        </div>

    </div>



    <!-- Java SpringBoot -->

    <div class="divPrinciBack">

        <div>
            <img src="https://du0ulnyus7r80.cloudfront.net/wp-content/uploads/2020/02/spring-boot-logo-png-4-transparent.png" alt="">
        </div>

        <div class="textosBack">

        <!-- titulo da linguagem/framework de programaçao -->

            <h1>SpringBoot</h1>

            <div>

                <h2>Descrição:</h2>
                <p>
                    Spring Boot é um framework baseado na linguagem Java, projetado para simplificar o desenvolvimento de aplicativos web e microsserviços. Ele facilita a criação de aplicativos robustos com configuração mínima, aproveitando a ampla gama de funcionalidades do ecossistema Spring.
                </p>

            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Utilizado principalmente para criar APIs RESTful, microsserviços, aplicações empresariais, plataformas financeiras e sistemas críticos que exigem robustez e escalabilidade.
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Robustez: Java é uma linguagem consolidada, e Spring Boot traz uma arquitetura poderosa para lidar com grandes sistemas e aplicativos corporativos.
                    </li>

                    <li>
                        Escalabilidade: É altamente escalável e amplamente utilizado em grandes corporações.
                    </li>

                    <li>
                        Configuração mínima: Spring Boot reduz a complexidade da configuração, permitindo que os desenvolvedores se concentrem no código.
                    </li>

                    <li>
                        Comunidade e suporte corporativo: Grande suporte da comunidade Java e das grandes empresas que utilizam o framework.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Curva de aprendizado: O Spring Boot tem uma curva de aprendizado acentuada, especialmente para novos desenvolvedores.
                    </li>

                    <li>
                        Complexidade excessiva: Pode ser uma solução muito pesada para projetos simples.
                    </li>

                    <li>
                        Desempenho: Aplicações Java podem ter um tempo de inicialização mais longo e ocupar mais memória em comparação com outras opções, como Node.js.
                    </li>

                </ol>
            </div>


        </div>

    </div>

</body>

</html>