<?php

    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {   
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Fumacê - Home</title>
    <style>
        body {
            background-color: #f4f7f9;
            color: #3b4a55;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #e0e7ed;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #a0b5c5;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #2c536f !important;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #1a3a56 !important;
        }

        .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #a0b5c5;
            padding: 20px;
            border-radius: 10px;
        }

        .card-carousel {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e0e7ed;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            width: 15rem;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            color: #2c536f;
            font-weight: bold;
        }

        .card-text {
            color: #3b4a55;
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .report-card {
            background-color: #ffffff;
            border: 1px solid #e0e7ed;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #e0e7ed;
            color: #2c536f;
            padding: 20px;
            text-align: center;
            border-top: 2px solid #a0b5c5;
        }

        footer a {
            color: #1a3a56;
            text-decoration: none;
        }

        footer a:hover {
            color: #0f2a43;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Fumacê</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mapa.html">Mapa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Estatísticas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="noticias.html">Notícias</a>
                        <a class="dropdown-item" href="quem-somos.html">Quem Somos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Cadastro.php">Cadastro</a>
                    </div>
                </li>
            </ul>
            <a class="btn btn-outline-primary ml-auto" href="login.php">Login</a>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide my-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-carousel">
                    <div class="card">
                        <a href="https://www.unicef.org/brazil/prevencao-e-combate-ao-aedes-aegypti" target="_blank">
                        <img src="https://st2.depositphotos.com/6222352/12316/v/450/depositphotos_123164340-stock-illustration-zika-virus-prevention.jpg" class="card-img-top" alt="Descrição da Imagem 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Prevenções</h5>
                            <p class="card-text">Dicas para se proteger.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://www.saude.ms.gov.br/dicas-simples-podem-ajudar-na-prevencao-contra-dengue-na-sua-residencia/" target="_blank">
                        <img src="https://st5.depositphotos.com/1007566/73475/v/450/depositphotos_734759832-stock-illustration-man-spraying-insecticide-dengue-control.jpg" class="card-img-top" alt="Descrição da Imagem 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ações</h5>
                            <p class="card-text">O que você pode fazer.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://www.dengue.pr.gov.br/Pagina/Dengue-Sintomas-e-Sinais#:~:text=Perda%20de%20peso%2C%20n%C3%A1useas%20e,persistentes%20e%20sangramento%20de%20mucosas" target="_blank">
                        <img src="https://st4.depositphotos.com/2896139/27531/v/450/depositphotos_275316124-stock-illustration-dengue-fever-symptoms-infographics.jpg" class="card-img-top" alt="Descrição da Imagem 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sintomas</h5>
                            <p class="card-text">Identifique os sinais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="report-card">
        <h5 class="card-title">Reporte Locais Suspeitos de Dengue</h5>
        <form action="Cadastro.php" method="GET">
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" placeholder="CEP" class="form-control" id="cep" name="cep" required>
            </div>
            <div class="form-group">
                <label for="rua">Rua:</label>
                <input type="text" placeholder="Logradouro" class="form-control" id="rua" name="rua" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" placeholder="Número" class="form-control" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </form>
    </div>

    <footer>
        <div class="footer-contact">
            <p>Universidade Cidade de São Paulo<br>
            Rua Cesário Galero, 448/475 - Tatuapé - São Paulo - SP - CEP 03071-000<br>
            (11) 3003-1189 | <a href="quem-somos.html">Fale Conosco</a></p>
        </div>
        <div>
            <p>Copyright © 2024 Fumacê. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" defer></script>
</body>
</html>