<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/front.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <!-- titulo da página -->
    <div class="FrontTitle">
        <h1>Principais linguagens para Front-End</h1>
    </div>

    <!-- ANGULAR -->

    <div class="divPrinci">

        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png" alt="">
        </div>

        <div class="textos">
        <!-- titulo da linguagem/framework de programaçao -->
            <h1>Angular</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Angular é um framework front-end de código aberto desenvolvido pelo Google, baseado em TypeScript. Ele é conhecido por ser uma solução completa para o desenvolvimento de aplicações web, oferecendo um conjunto robusto de ferramentas para lidar com rotas, formulários, comunicação HTTP, animações e muito mais.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    É amplamente utilizado para construir aplicações web complexas e escaláveis, como painéis administrativos, sistemas de gerenciamento de conteúdo e aplicações empresariais.
                </p>
            </div>

            <div>

                <h2>Vantagens:</h2>

                <ol>

                    <li>
                        Estrutura Completa: Angular oferece uma solução integrada para desenvolvimento front-end com ferramentas para tudo, desde injeção de dependência até manipulação de formulários e estado.
                    </li>

                    <li>
                        TypeScript: A utilização de TypeScript melhora a manutenção do código, adicionando tipagem estática e recursos de desenvolvimento modernos.
                    </li>

                    <li>
                        Comunidade e Suporte: Como é mantido pelo Google, possui uma comunidade ativa e suporte corporativo.
                    </li>

                </ol>

            </div>

            <div>

                <h2>Desvantagens:</h2>

                <ol>

                    <li>
                        Curva de Aprendizado: Por ser um framework completo e opinativo, possui uma curva de aprendizado acentuada, especialmente para iniciantes.
                    </li>

                    <li>
                        Complexidade: A complexidade do Angular pode ser excessiva para projetos menores ou menos estruturados.
                    </li>

                    <li>
                        Performance: Em aplicações mais simples, pode haver uma sobrecarga devido à quantidade de funcionalidades incluídas no framework.
                    </li>

                </ol>

            </div>

        </div>

    </div>



    <!-- VUE -->

    <div class="divPrinci">

        <div>
            <img src="https://www.dotcom-monitor.com/wp-content/uploads/sites/3/2020/05/Vue-logo-1.png" alt="">
        </div>

        <div class="textos">

        <!-- titulo da linguagem/framework de programaçao -->

            <h1>Vue</h1>

            <div>
                <h2>Descrição:</h2>
                <p>
                    Vue é um framework progressivo de código aberto criado por Evan You. Ele se posiciona entre a simplicidade do React e a complexidade do Angular, oferecendo uma curva de aprendizado mais suave e uma API intuitiva para desenvolvimento de interfaces de usuário.
                </p>
            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Ideal para construir aplicações interativas e pequenas até médias aplicações SPA. É amplamente adotado por desenvolvedores que desejam uma curva de aprendizado mais suave em comparação com Angular e uma estrutura mais organizada que o React.
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Facilidade de Aprendizado: Sua documentação é elogiada por ser clara e sua API é fácil de entender.
                    </li>

                    <li>
                        Flexibilidade: Oferece a flexibilidade de ser utilizado de maneira progressiva, podendo ser integrado em partes de uma aplicação existente.
                    </li>

                    <li>
                        Comunidade e Ferramentas: Possui uma comunidade ativa e ferramentas de suporte como Vue CLI, Vue Router e Vuex para gerenciamento de estado.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Comunidade Menor: Embora seja bastante popular, ainda possui uma comunidade e suporte corporativo menores em comparação com Angular e React.
                    </li>

                    <li>
                        Ecosistema Fragmentado: Alguns aspectos como gerenciamento de estado e roteamento não são tão robustos quanto as alternativas no React ou Angular.
                    </li>

                    <li>
                        Performance em Aplicações Grandes: Em aplicações muito complexas, pode apresentar dificuldades de performance e estruturação.
                    </li>

                </ol>
            </div>


        </div>

    </div>



    <!-- REACT -->

    <div class="divPrinci">

        <div>
            <img src="https://miro.medium.com/v2/resize:fit:1200/1*WA_9JsyqFkge2HwYKcdJQw.png" alt="">
        </div>

        <div class="textos">

        <!-- titulo da linguagem/framework de programaçao -->

            <h1>React</h1>

            <div>

                <h2>Descrição:</h2>
                <p>
                    React é uma biblioteca front-end de código aberto desenvolvida pelo Facebook. Focada na construção de interfaces de usuário com base em componentes, ela se destaca por sua abordagem declarativa e sua capacidade de gerenciar de maneira eficiente o estado da aplicação.
                </p>

            </div>

            <div>
                <h2>Usos:</h2>
                <p>
                    Muito utilizado para construir interfaces de usuário dinâmicas, especialmente Single Page Applications (SPAs) e componentes interativos em grandes aplicações web e mobile (com React Native).
                </p>
            </div>

            <div>
                <h2>Vantagens:</h2>
                <ol>

                    <li>
                        Componentização: A organização baseada em componentes facilita o reuso de código e a manutenção da aplicação.
                    </li>

                    <li>
                        Ecosistema Flexível: Com uma biblioteca leve, os desenvolvedores têm a liberdade de escolher suas próprias ferramentas e bibliotecas para gerenciamento de estado, roteamento, etc.
                    </li>

                    <li>
                        Virtual DOM: O uso do Virtual DOM melhora o desempenho da UI ao minimizar a quantidade de operações de manipulação direta no DOM real.
                    </li>

                </ol>

            </div>

            <div>
                <h2>Desvantagens:</h2>
                <ol>

                    <li>
                        Não é um Framework Completo: Por ser apenas uma biblioteca de UI, requer a integração de outras bibliotecas para gerenciamento de estado (Redux, Context API) e roteamento (React Router).
                    </li>

                    <li>
                        Curva de Aprendizado do Ecossistema: Entender como combinar as várias ferramentas e bibliotecas pode ser desafiador.
                    </li>

                    <li>
                        Complexidade de Configuração: O processo de configuração inicial e construção de um ambiente React pode ser mais complicado sem o uso de ferramentas como Create React App.
                    </li>

                </ol>
            </div>


        </div>

    </div>

    <?php include "footer.php"; ?>

</body>

</html>