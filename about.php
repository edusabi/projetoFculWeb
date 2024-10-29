<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Facul</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
</head>

<body>

    <?php include "navbar.php"; ?>

<div class="DivAboutPrinc">

        <div class="content">
            <h3>Caso queira compartilhar com alguém que precise ver está página só clicar abaixo</h3>
            <p>Compartilhe com seus amigos!</p>

            <!-- Botão de Compartilhamento -->
            <button id="shareBtn">Compartilhar</button>
        </div>

    <div class="DivFaM">

        <div class="mapaDiv">
            <h2>Nossa localização</h2>
            <div id="map"></div>
        </div>

        <div class="diForm">

            <h2>Envie sua mensagem!</h2>

            <form id="formSubmit">

                <input type="text"
                    name="nome"
                    id="nome"
                    placeholder="Digite seu nome"
                    required>

                <input type="email"
                    name="email"
                    id="email"
                    placeholder="Digite seu E-mail"
                    required>

                <textarea placeholder="Digite sua dúvida aqui" required id="assunto"></textarea>

                <div class="divButton">
                    <button>Enviar</button>
                </div>

            </form>

        </div>
    </div>

</div>


    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        // Obtém o botão de compartilhamento pelo ID 'shareBtn'
        const shareBtn = document.getElementById('shareBtn');

        // Adiciona um ouvinte de eventos para o clique no botão de compartilhamento
        shareBtn.addEventListener('click', async () => {
            try {
                // Verifica se o navegador suporta o recurso de compartilhamento via navigator.share
                if (navigator.share) {
                    // Caso suporte, tenta compartilhar o conteúdo definido 
                    await navigator.share({
                        title: 'Título do Artigo', 
                        text: 'Este é o conteúdo da página que você pode compartilhar com seus amigos!',
                        url: window.location.href 
                    });
                    // Exibe uma mensagem de sucesso caso o conteúdo seja compartilhado
                    alert('Conteúdo compartilhado com sucesso!');
                } else {
                    // Caso o navegador não suporte o recurso de compartilhamento, exibe um alerta
                    alert('O compartilhamento não é suportado neste navegador.');
                }
            } catch (error) {
                // Captura e exibe qualquer erro que ocorra durante o processo de compartilhamento
                console.error('Erro ao compartilhar:', error);
            }
        });


        // Inicializa o mapa
        const map = L.map('map').setView([-8.2801, -35.9734], 15); // Coordenadas da FAVIP

        // Carrega e exibe o mapa com OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Adiciona um marcador no local da FAVIP
        L.marker([-8.2801, -35.9734]).addTo(map)
            .bindPopup('FAVIP - Faculdade do Vale do Ipojuca')
            .openPopup();
    </script>

<script src="js/form.js"></script>
</body>

</html>