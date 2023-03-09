<?php
require_once("../funcoes/funcoes.php");

if (!verificarLogado()) {
    header("Location: ../index.php");
    exit();
}

$form = isset($_GET["success"]);

if ($form) {
    $success = $_GET["success"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Papelaria</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center">
    <header class="box">
        <h1 class="text-center titulo">sistema da papelaria 2023</h1>

        <div class="row d-flex flex-nowrap justify-content-center">
            <div class="text-center menu "><a class="menu-letter" href="../home.php">Inicio</a></div>
            <div class="text-center menu "><a class="menu-letter" href="listar.php">Lista Produtos</a></div>
            <div class="text-center menu "><a class="menu-letter" href="pesquisar.php">Pesquisa por código</a></div>
            <div class="text-center menu activated"><a class="menu-letter" href="cadastrar.php">Inserir produto</a></div>
            <div class="text-center menu"><a class="menu-letter" href="editar.php">Editar produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="deletar.php">Apagar produtos</a></div>
            <div class="text-center menu"><a class="menu-letter" href="venda.php">Efetuar venda</a></div>
            <div class="text-center menu"><a class="menu-letter" href="logoff.php">Terminar Sessão</a></div>
        </div>
    </header>

    <main class="box d-flex justify-content-center align-items-center">
        <div class="col d-flex justify-content-center align-items-center flex-column">
            <div class="row text-center">
                <h5 class="text-center subtitulo">Inserir</h5>
            </div>
            <br>
            <?php if ($form) : ?>

                <?php if ($success == 1) : ?>
                    <p class="success text-center ">Sucesso!</p>
                <?php else : ?>
                    <p class="erro text-center ">Tente novamente!</p>
                <?php endif; ?>

                <a href="cadastrar.php">
                    <button class="botao">
                        VOLTAR
                    </button>
                </a>

            <?php endif; ?>

            <?php if (empty($form)) : ?>

                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <form action="cadastrar2.php" class="mx-auto d-flex justify-content-center align-items-center flex-column">
                        <div class="col">
                            <input class="text-center" type="text" name="nome" placeholder="Nome">
                            <br><br>
                            <input class="text-center" type="number" name="preco" placeholder="Preço" step="0.01">
                            <br><br>
                            <input class="text-center" type="number" name="quantidade" placeholder="Quantidade" step="1">

                        </div>
                        <br><br>
                        <input type="submit" value="CADASTRAR" class="botao">
                        <br>
                    </form>
                </div>

            <?php endif; ?>

        </div>
    </main>

    <footer class=" fixed-bottom text-center fw-bolder">
        Papelaria PHP + MySQL
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>