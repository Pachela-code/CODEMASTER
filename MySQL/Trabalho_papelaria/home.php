<?php
require_once("funcoes/funcoes.php");

if (!verificarLogado()) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Papelaria</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center">
    <header class="box">
        <h1 class="text-center titulo">Sistema da papelaria 2023</h1>

        <div class="row d-flex flex-nowrap justify-content-center">
            <div class="text-center menu activated"><a class="menu-letter" href="home.php">Home</a></div>
            <div class="text-center menu "><a class="menu-letter" href="paginas/listar.php">Listar Produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/pesquisar.php">Pesquisar Produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/cadastrar.php">Cadastrar Produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/editar.php">Editar Produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/deletar.php">Apagar Produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/venda.php">Efetuar Vendas</a></div>
            <div class="text-center menu"><a class="menu-letter" href="paginas/logoff.php">Loggout</a></div>
        </div>
    </header>

    <main class="box d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="row text-center">
                <h5 class="text-center subtitulo">Bem vindo, <?= $_SESSION["nome"]; ?></h5>
            </div>
        </div>
    </main>

    <footer class=" fixed-bottom text-center fw-bolder">
        Papelaria PHP + MySQL
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>