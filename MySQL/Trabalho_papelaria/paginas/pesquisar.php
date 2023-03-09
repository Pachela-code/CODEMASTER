<?php
require_once("../funcoes/funcoes.php");

if (!verificarLogado()) {
    header("Location: ../index.php");
    exit();
}
$max = 0;
$form = !empty($_GET["id"]);

if ($form) {
    $id = intval($_GET["id"]);
    $max = selectSQLUnico("SELECT * FROM produtos WHERE id = (SELECT MAX(id) FROM produtos)");
    $lista = selectSQLUnico("SELECT * FROM produtos WHERE id=$id");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar - Papelaria</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center">
    <header class="box">
        <h1 class="text-center titulo">sistema da papelaria 2023</h1>
        <div class="row d-flex flex-nowrap justify-content-center">
            <div class="text-center menu "><a class="menu-letter" href="../home.php">Inicio</a></div>
            <div class="text-center menu "><a class="menu-letter" href="listar.php">Lista Produtos</a></div>
            <div class="text-center menu activated"><a class="menu-letter" href="pesquisar.php">Pesquisa por código</a></div>
            <div class="text-center menu "><a class="menu-letter" href="cadastrar.php">Inserir produto</a></div>
            <div class="text-center menu "><a class="menu-letter" href="editar.php">Editar produto</a></div>
            <div class="text-center menu "><a class="menu-letter" href="deletar.php">Apagar produto</a></div>
            <div class="text-center menu"><a class="menu-letter" href="venda.php">Efetuar venda</a></div>
            <div class="text-center menu"><a class="menu-letter" href="logoff.php">Terminar Sessão</a></div>
        </div>
    </header>
    <main class="box d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="row text-center">
                <h5 class="text-center subtitulo">pesquisar código</h5>
            </div>
            <br>
            <div class="col d-flex justify-content-center align-items-center flex-column">
                <form action="pesquisar.php" class="  mx-auto d-flex justify-content-center align-items-center flex-column">
                    <div class="col">
                        <input class="text-center" type="number" name="id" placeholder="Código">
                    </div>
                    <br>
                    <input type="submit" value="PESQUISAR" class="botao">
                    <br>
                </form>
                <?php if ($form) : ?>
                    <?php if (!empty($lista)) : ?>
                        <table class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>PREÇO</th>
                                <th>QUANTIDADE</th>
                            </tr>
                            <tr>
                                <td><?= $lista["id"]; ?></td>
                                <td><?= $lista["nome"]; ?></td>
                                <td><?= $lista["preco"]; ?></td>
                                <td><?= $lista["quantidade"]; ?></td>
                            </tr>
                        </table>
                        <a href="pesquisar.php">
                            <button class="botao">
                                RESET
                            </button>
                        </a>
                    <?php elseif (empty($lista)) : ?>
                        <p class="erro">Produto não encontrado.</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <footer class=" fixed-bottom text-center fw-bolder">
        Papelaria PHP + MySQL
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>