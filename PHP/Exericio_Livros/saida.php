<?php

$quantidade;

$form = isset($_GET["quantidade"]);

if ($form) {
    $quantidade = intval($_GET["quantidade"]);
} else {
    /*
    header("Location: entrada.php");
    exit();
    */
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header class="container my-3">

        <div class="row">

            <div class="col text-center text-uppercase">

                <h1 class="titulo-site">Últimos Livros</h1>

            </div>

        </div>

    </header>

    <main class="container mb-5">

        <div class="row mx-auto d-flex justify-content-center gap-5 p-3" id="estante">

            <?php if ($form) : ?>

                <?php for ($i = 0; $i < $quantidade; $i++) : ?>

                    <?php $x = rand(1, 5); ?>

                    <div class="livro p-0">
                        <img src="capas/<?= $x; ?>.jpg" alt="Livro <?= ($i + 1); ?>">
                        <h4 class="text-uppercase text-center mt-2">Livro <?= ($i + 1); ?></h4>
                        <p class="px-2 mb-2 pb-1">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem vita
                            laborum cupiditate mollitia blanditiis sint doloremque eaque, ab nemo
                            voluptates ipsa quae, ratione quo aliquam praesentium? Tempore
                            asperiores quidem earum.
                        </p>
                    </div>

                <?php endfor; ?>

            <?php else : ?>

                <div class="col text-center">
                    <h3>Preencha o formulário da página anterior.</h3>
                    <a href="entrada.php">Voltar</a>
                </div>

            <?php endif; ?>

        </div>

    </main>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>