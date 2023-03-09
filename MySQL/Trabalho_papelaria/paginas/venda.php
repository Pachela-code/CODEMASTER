<?php
require_once("../funcoes/funcoes.php");

if (!verificarLogado()) {
    header("Location: ../index.php");
    exit();
}

$lista = selectSQL("SELECT * FROM produtos ORDER BY id");

$form = isset($_GET["vender"]);

if ($form) {
    $vender = $_GET["vender"];

    $produto = selectSQLUnico("SELECT * FROM produtos WHERE id=$vender");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda - Papelaria</title>

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
            <div class="text-center menu "><a class="menu-letter" href="cadastrar.php">Inserir produto</a></div>
            <div class="text-center menu "><a class="menu-letter" href="editar.php">Editar produto</a></div>
            <div class="text-center menu "><a class="menu-letter" href="deletar.php">Apagar produto</a></div>
            <div class="text-center menu activated"><a class="menu-letter" href="venda.php">Efetuar venda</a></div>
            <div class="text-center menu"><a class="menu-letter" href="logoff.php">Terminar Sessão</a></div>
        </div>
    </header>

    <main class="box d-flex justify-content-center align-items-center">
        <div class="col d-flex justify-content-center align-items-center flex-column">
            <div class="row text-center">
                <h5 class="text-center subtitulo">vender produto</h5>
            </div>
            <br>

            <?php if ($form) : ?>

                <table class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PREÇO</th>
                        <th>QUANTIDADE</th>
                        <th>acção</th>
                    </tr>
                    <tr>
                        <td><?= $produto["id"]; ?></td>
                        <td><?= $produto["nome"]; ?></td>
                        <td><?= $produto["preco"]; ?></td>
                        <td><?= $produto["quantidade"]; ?></td>
                        <form action="venda2.php">
                            <td>
                                <input type="hidden" name="id" value="<?= $produto["id"]; ?>">
                                <input class="text-center" type="number" name="vender_quantos" max="<?= $produto["quantidade"]; ?>" step="1" placeholder="Total">
                            </td>
                    </tr>
                </table>
                <input type="submit" value="VENDER" class="botao button">
                </form>


            <?php else : ?>
                <table class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PREÇO</th>
                        <th>QUANTIDADE</th>
                        <th>acção</th>
                    </tr>
                    <?php foreach ($lista as $l) : ?>
                        <tr>
                            <td><?= $l["id"]; ?></td>
                            <td><?= $l["nome"]; ?></td>
                            <td><?= $l["preco"]; ?></td>
                            <td><?= $l["quantidade"]; ?></td>
                            <form action="venda.php">
                                <td>
                                    <a href="venda.php">
                                        <button class="botao edit" name="vender" value="<?= $l["id"]; ?>">VENDER</button>
                                    </a>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </main>

    <footer class=" fixed-bottom text-center fw-bolder">
        Papelaria PHP + MySQL
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>