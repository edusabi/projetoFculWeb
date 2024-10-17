<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/global.css">
</head>

<body>
    
    <nav>
        
        <div>
            <h1 id="logo">Projeto Facul</h1>
        </div>

        <div class="itens">
            <ul class="itensInd">
                <li><a href="index.php">Home</a></li>
                <li><a href="front.php">Front</a></li>
                <li><a href="back.php">Back</a></li>
                <li><a href="full.php">Full</a></li>
                <li><a href="about.php">Sobre</a></li>
            </ul>
                    <div class="nav-bar">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
        </div>


        <div class="changeColor">
        
            <div class="ball"></div>
        
        </div>
        
    </nav>

    <script>
        ///pega o body
        const body = document.querySelector('body');
        ///pega a bola
    const ball = document.querySelector(".ball");

    function TemaSalvo(tema) {
        ///vê se o tema é light
        if (tema === 'light') {
            //se for adiciona a classList light no body e ball-move na bola
            body.classList.add('light');
            ball.classList.add('ball-move');
        } else {
            //e se não for remove a classList light no body e ball-move na bola
            body.classList.remove('light');
            ball.classList.remove('ball-move');
        }
    }

    //pega o tema salvo no localStorage
    const SalvarTema = localStorage.getItem('tema');
    
    //e coloca ele aqui
    if (SalvarTema) {
        TemaSalvo(SalvarTema);
    }

    // Adiciona o evento de clique na bola para trocar de tema
    ball.addEventListener("click", (e) => {
        e.target.classList.toggle("ball-move");
        body.classList.toggle("light");

        // Salva o tema atual no localStorage
        if (body.classList.contains("light")) {
            //se o body contem light, adiciona o tema light
            localStorage.setItem('tema', 'light');
        } else {
            //se o body não contem light, adiciona o tema dark
            localStorage.setItem('tema', 'dark');
        }
    });

    ///aqui pega os itens da navbar
    const itens = document.querySelector(".itensInd");
    ///e aqui pega as 3 barrinhas da navbar quando está no mobile
    const navbar = document.querySelector(".nav-bar");

    ////Linhas, pega as 3 barrinhas
    const line1 = document.querySelector(".line1");
    const line2 = document.querySelector(".line2");
    const line3 = document.querySelector(".line3");

    ///adiciona um evento de clique
    navbar.addEventListener("click", ()=>{

        ///e quando clicar faz um toggle, colocando e tirando a classList "ativo"
        itens.classList.toggle("ativo");

        if(itens.classList.contains("ativo")){
            ///se for ativo faz os itens aparecerem e a barra de rolagem desaparece
            itens.style.display = "flex";
            body.style.overflow = "hidden";
            
            ///e aqui faz um rotate na linha 1 e na linha 3 para formarem um " X ", e tira a linha 2
            line1.style.transform = 'rotate(-45deg) translate(-7px,7px)'
            line3.style.transform = 'rotate(45deg) '
            line2.style.display = 'none'
        }else{
            ///se for ativo faz os itens desaparecerem e a barra de rolagem aparece novamente
            itens.style.display = "none";
            body.style.overflow = "auto";
            
            ///e aqui faz um rotate na linha 1 e na linha 3 para voltarem ao normal, e volta com a linha 2
            line1.style.transform = 'rotate(0) translate(0,0)'
            line3.style.transform = 'rotate(0deg) '
            line2.style.display = 'block'
        };
    
    });

</script>

</body>
