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
            background-color: #dfffe0;
            color: #3c3c3c;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #b2f0b2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #81c784;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #4a7a4a !important;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #2e5e2e !important;
        }

        .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #81c784;
            padding: 20px;
            border-radius: 10px;
        }

        .card-carousel {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            background-color: #eaffea;
            border: 2px solid #a5d6a7;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
            width: 15rem;
        }

        .card:hover {
            transform: scale(1.07);
        }

        .card-title {
            color: #2e7d32;
            font-weight: bold;
        }

        .card-text {
            color: #4e4e4e;
        }

        .card-img-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .report-card {
            background-color: #eaffea;
            border: 2px solid #a5d6a7;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        footer {
            background-color: #b2f0b2;
            color: #4a7a4a;
            padding: 20px;
            text-align: center;
            border-top: 2px solid #81c784;
        }

        footer a {
            color: #388e3c;
            text-decoration: none;
        }

        footer a:hover {
            color: #2e5e2e;
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
            <a class="btn btn-outline-success ml-auto" href="login.php">Login</a> <!-- Botão de Login estilizado -->
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide my-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-carousel">
                    <div class="card">
                        <img src="https://st2.depositphotos.com/6222352/12316/v/450/depositphotos_123164340-stock-illustration-zika-virus-prevention.jpg" class="card-img-top" alt="Descrição da Imagem 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Prevenções</h5>
                            <p class="card-text">Dicas para se proteger.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://st5.depositphotos.com/1007566/73475/v/450/depositphotos_734759832-stock-illustration-man-spraying-insecticide-dengue-control.jpg" class="card-img-top" alt="Descrição da Imagem 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ações</h5>
                            <p class="card-text">O que você pode fazer.</p>
                        </div>
                    </div>
                    <div class="card">
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
            <button type="submit" class="btn btn-outline-success">Enviar</button> <!-- Botão de Enviar estilizado -->
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





