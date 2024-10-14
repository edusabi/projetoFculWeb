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
            <h1 id="logo">L O G O</h1>
        </div>

        <div class="itens">
            <ul class="itensInd">
                <li><a href="index.php">Home</a></li>
                <li><a href="front.php">Front</a></li>
                <li><a href="back.php">Back</a></li>
                <li><a href="full.php">Full</a></li>
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
    const body = document.querySelector('body');
    const ball = document.querySelector(".ball");

    function TemaSalvo(tema) {
        if (tema === 'light') {
            body.classList.add('light');
            ball.classList.add('ball-move');
        } else {
            body.classList.remove('light');
            ball.classList.remove('ball-move');
        }
    }

    const SalvarTema = localStorage.getItem('tema');

    if (SalvarTema) {
        TemaSalvo(SalvarTema);
    }

    // Adiciona o evento de clique na bola para trocar de tema
    ball.addEventListener("click", (e) => {
        e.target.classList.toggle("ball-move");
        body.classList.toggle("light");

        // Salva o tema atual no localStorage
        if (body.classList.contains("light")) {
            localStorage.setItem('tema', 'light');
        } else {
            localStorage.setItem('tema', 'dark');
        }
    });


    const itens = document.querySelector(".itensInd");
    const navbar = document.querySelector(".nav-bar");

    ////Linhas
    const line1 = document.querySelector(".line1");
    const line2 = document.querySelector(".line2");
    const line3 = document.querySelector(".line3");

    navbar.addEventListener("click", ()=>{

        itens.classList.toggle("ativo");

        if(itens.classList.contains("ativo")){
            itens.style.display = "flex";
            body.style.overflow = "hidden";

            line1.style.transform = 'rotate(-45deg) translate(-7px,7px)'
            line3.style.transform = 'rotate(45deg) '
            line2.style.display = 'none'
        }else{
            itens.style.display = "none";
            body.style.overflow = "auto";

            line1.style.transform = 'rotate(0) translate(0,0)'
            line3.style.transform = 'rotate(0deg) '
            line2.style.display = 'block'
        };
    
    });

</script>

</body>
