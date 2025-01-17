<?php
// Iniciando a sessão PHP
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticiário Web - Atualizado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100" style="background-color: #2e2e2e;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">Noticiário Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#geral">Geral</a></li>
                    <li class="nav-item"><a class="nav-link" href="#negocios">Negócios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#esportes">Esportes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#entretenimento">Entretenimento</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tecnologia">Tecnologia</a></li>
                </ul>
                <?php
                // Verificando se o usuário está logado e exibindo os botões apropriados
                if (isset($_SESSION['usuario'])) {
                    echo "<button class='btn btn-danger ms-3' type='button' onclick=\"window.location.href='login.php'\">Logout</button>";
                } else {
                    echo "<button class='btn btn-warning ms-3' type='button' onclick=\"window.location.href='login.html'\">Login</button>";
                    echo "<button class='btn btn-light ms-3' type='button' onclick=\"window.location.href='formulario.html'\">Cadastro</button>";
                }
                ?>
            </div>
        </div>
    </nav>

    <!-- Banner de Destaques -->
    <div class="banner">
        <img src="./img/logo.jpeg" alt="Banner de Destaques" class="img-fluid">
    </div>

    <!-- Seções de Notícias -->
    <div class="container mt-4" id="news-container">
        <!-- Notícias de Geral -->
        <h2 id="geral" class="news-section-title">Notícias de Geral - Hoje</h2>
        <div class="news-articles">
            <div class="news-article">
                <img src="./img/gaza.jpeg" alt="Crise Humanitária em Gaza" class="news-image">
                <h3>Crise Humanitária em Gaza</h3>
                <p>A situação na Faixa de Gaza continua a se deteriorar com falta de recursos básicos e aumento de conflitos.</p>
                <a href="https://www.bbc.com/portuguese/articles/ce996v1q41no" target="_blank" class="read-more">Leia mais</a>
            </div>
            <div class="news-article">
                <img src="./img/eua.jfif" alt="Kamala e Trump chegam empatados à véspera da eleição nos EUA" class="news-image">
                <h3>Eleições nos EUA</h3>
                <p>Kamala Harris e Donald Trump chegam tecnicamente empatados à véspera da eleição presidencial dos Estados Unidos de 2024 — tanto no cenário nacional quanto nos estados-pêndulo, aqueles que decidirão o pleito.</p>
                <a href="https://www.cnnbrasil.com.br/internacional/eleicoes-nos-eua-2024/kamala-e-trump-chegam-empatados-a-vespera-da-eleicao-nos-eua-veja-ultimas-pesquisas/" target="_blank" class="read-more">Leia mais</a>
            </div>
        </div>

        <!-- Notícias de Negócios -->
        <h2 id="negocios" class="news-section-title">Notícias de Negócios - Hoje</h2>
        <div class="news-articles">
            <div class="news-article">
                <img src="./img/dolar.jpg" alt="Alta do Dólar" class="news-image">
                <h3>Alta do Dólar</h3>
                <p>A valorização do dólar traz impacto sobre as economias emergentes.</p>
                <a href="https://g1.globo.com/economia/noticia/2024/11/01/dolar-ibovespa.ghtml" target="_blank" class="read-more">Leia mais</a>
            </div>
            <div class="news-article">
                <img src="./img/banco.jpg" alt="Fusão de Bancos Europeus" class="news-image">
                <h3>Fusão de Bancos Europeus</h3>
                <p>Dois dos maiores bancos europeus anunciaram fusão, criando uma das maiores instituições financeiras do continente.</p>
                <a href="https://valor.globo.com/financas/noticia/2024/09/12/megafuso-de-bancos-europeus-ainda-no-desafiaria-wall-street.ghtml" target="_blank" class="read-more">Leia mais</a>
            </div>
        </div>

        <!-- Notícias de Esportes -->
        <h2 id="esportes" class="news-section-title">Notícias de Esportes - Hoje</h2>
        <div class="news-articles">
            <div class="news-article">
                <img src="img/campeoes.jpg" alt="Liga dos Campeões" class="news-image">
                <h3>Liga dos Campeões</h3>
                <p>Os principais clubes da Europa competiram em emocionantes jogos pelas oitavas de final da Liga dos Campeões.</p>
                <a href="https://ge.globo.com/futebol/futebol-internacional/liga-dos-campeoes/" target="_blank" class="read-more">Leia mais</a>
            </div>
            <div class="news-article">
                <img src="./img/maratona.jpg" alt="Maratona de Nova York" class="news-image">
                <h3>Maratona de Nova York</h3>
                <p>A tradicional Maratona de Nova York ocorreu com milhares de participantes de todo o mundo.</p>
                <a href="https://www.poder360.com.br/poder-sportsmkt/maratona-de-nova-york-deu-us-100-mil-para-o-ganhador-diz-site/" target="_blank" class="read-more">Leia mais</a>
            </div>
        </div>

        <!-- Notícias de Entretenimento -->
        <h2 id="entretenimento" class="news-section-title">Notícias de Entretenimento - Hoje</h2>
        <div class="news-articles">
            <div class="news-article">
                <img src="img/oscar.jpg" alt="Premiação do Oscar" class="news-image">
                <h3>Premiação do Oscar</h3>
                <p>O Oscar deste ano celebrou grandes nomes do cinema com prêmios emocionantes.</p>
                <a href="https://g1.globo.com/pop-arte/cinema/oscar/" target="_blank" class="read-more">Leia mais</a>
            </div>
            <div class="news-article">
                <img src="./img/marvel.jpg" alt="Novo Filme da Marvel" class="news-image">
                <h3>Novo Filme da Marvel</h3>
                <p>A Marvel lançou seu novo filme, que promete ser um dos maiores sucessos do ano.</p>
                <a href="https://www.omelete.com.br/busca?q=marvel" target="_blank" class="read-more">Leia mais</a>
            </div>
        </div>

        <!-- Notícias de Tecnologia -->
        <h2 id="tecnologia" class="news-section-title">Notícias de Tecnologia - Hoje</h2>
        <div class="news-articles">
            <div class="news-article">
                <img src="./img/apple.jpg" alt="Lançamento do Novo iPhone" class="news-image">
                <h3>Lançamento do Novo iPhone</h3>
                <p>A Apple anunciou o lançamento de seu mais novo iPhone, com funcionalidades inéditas.</p>
                <a href="https://tecnoblog.net/iphone/" target="_blank" class="read-more">Leia mais</a>
            </div>
            <div class="news-article">
                <img src="./img/tesla.jfif" alt="Tesla Anuncia Novidades" class="news-image">
                <h3>Tesla Anuncia Novidades</h3>
                <p>Elon Musk anunciou novas funcionalidades para os carros da Tesla, focadas em inteligência artificial.</p>
                <a href="https://insideevs.uol.com.br/news/738617/tesla-7-milhoes-carros-produzidos/" target="_blank" class="read-more">Leia mais</a>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-light p-4 mt-auto">
        <div class="container">
            <p class="text-center mb-0">&copy; 2024 Portal de Notícias - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
