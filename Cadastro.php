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
            background-color: #f4f7f9;
            font-family: Arial, sans-serif;
            color: #3b4a55;
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

        .card {
            max-width: 450px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #e0e7ed;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #2c536f;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .botao {
            background-color: #2c536f;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 15px;
        }

        .botao:hover {
            background-color: #1a3a56;
        }

        .register-link {
            margin-top: 15px;
            text-align: center;
        }

        .register-link a {
            color: #2c536f;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-link a:hover {
            color: #1a3a56;
        }

        footer {
            background-color: #e0e7ed;
            color: #2c536f;
            padding: 20px;
            text-align: center;
            border-top: 2px solid #a0b5c5;
            margin-top: auto;
        }

        footer a {
            color: #2c536f;
            text-decoration: none;
        }

        footer a:hover {
            color: #1a3a56;
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
            <a class="btn btn-outline-primary ml-auto" href="login.php">Login</a>
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
                <div class="register-link">
                    <p>Já possui conta? <a href="login.php">Faça login aqui</a>.</p>
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