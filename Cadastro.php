<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "insert into usuarios(nome, email, senha) 
        values ('$nome', '$email', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Fumacê - Cadastro</title>
    <style>
        body {
            background-color: #dfffe0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: #3c3c3c;
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

        .card {
            width: 100%;
            max-width: 450px;
            margin: auto;
            background-color: #eaffea;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            padding: 20px;
        }
        h1 {
            color: #2e7d32;
            font-weight: bold;
            text-align: center;
        }
        .form-control {
            border-radius: 10px;
        }
        .botao {
            background-color: #81c784;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
        }
        .botao:hover {
            background-color: #66bb6a;
        }

        .already-registered {
            margin-top: 15px;
            text-align: center;
        }
        .already-registered .btn {
            background-color: #a5d6a7;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
            width: auto;
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        .already-registered .btn:hover {
            background-color: #81c784;
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
                <li class="nav-item">
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Cadastro</h1>
                <form action="cadastrar.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" placeholder="Nome" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" placeholder="Senha" class="form-control" name="senha" id="senha" required>
                    </div>
                    <input type="submit" name="submit" value="Cadastrar" class="botao">
                </form>
                <div class="already-registered">
                    <a href="login.php" class="btn">Já possui cadastro?</a>
                </div>
            </div>
        </div>
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




