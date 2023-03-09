<?php
require_once("../funcoes/funcoes.php");

if (!verificarLogado()) {
    header("Location: index.php");
    exit();
}

$form = isset($_GET["success"]);

if ($form) {
    $success = $_GET["success"];
}

$form2 = isset($_GET["editar"]);

if ($form2) {
    $id = $_GET["editar"];
}

$form3 = isset($_GET["nome"])
    && isset($_GET["preco"])
    && isset($_GET["quantidade"]);

if ($form3) {
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade' WHERE $id=id");

    $success = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Papelaria</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center">
    <header class="box">
        <h1 class="text-center titulo">sistema da papelaria 2023</h1>

        <div class="row d-flex flex-nowrap justify-content-center">
            <div class="text-center menu "><a class="menu-letter" href="../home.php">home</a></div>
            <div class="text-center menu "><a class="menu-letter" href="listar.php">listar produtos</a></div>
            <div class="text-center menu "><a class="menu-letter" href="pesquisar.php">pesquisar código</a></div>
            <div class="text-center menu "><a class="menu-letter" href="cadastrar.php">cadastrar produto</a></div>
            <div class="text-center menu activated"><a class="menu-letter" href="editar.php">editar produto</a></div>
            <div class="text-center menu"><a class="menu-letter" href="deletar.php">deletar produto</a></div>
            <div class="text-center menu"><a class="menu-letter" href="venda.php">registrar vendas</a></div>
            <div class="text-center menu"><a class="menu-letter" href="logoff.php">sair</a></div>
        </div>
    </header>

    <main class="box d-flex justify-content-center align-items-center">
        <div class="col d-flex justify-content-center align-items-center flex-column">
            <div class="row text-center">
                <h5 class="text-center subtitulo">editar produto (<?= $id; ?>)</h5>
            </div>
            <br>
            <?php if (!empty($success)) : ?>

                <?php if ($success == 1) : ?>
                    <p class="success text-center ">Sucesso!</p>
                <?php else : ?>
                    <p class="erro text-center ">Erro!</p>
                <?php endif; ?>

                <a href="editar.php">
                    <button class="botao">
                        VOLTAR
                    </button>
                </a>

            <?php endif; ?>

            <?php if (empty($success)) : ?>

                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <form action="editar2.php" class="mx-auto d-flex justify-content-center align-items-center flex-column">
                        <div class="col">
                            <input class="text-center" type="text" name="nome" placeholder="Nome">
                            <br><br>
                            <input class="text-center" type="number" name="preco" placeholder="Preço" step="0.01">
                            <br><br>
                            <input class="text-center" type="number" name="quantidade" placeholder="Quantidade" step="1">
                            <input type="hidden" name="editar" value="<?= $id; ?>">

                        </div>
                        <br><br>
                        <input type="submit" value="EDITAR" class="botao">
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