<?php

require_once("helper.php");

$livros = getTodosLivrosMenu();

$rota = ["imprensa", "2"];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="teste2.js"></script>

</head>
<body>

    <header class="container-fluid">

        <div class="row">

            <div class="col-12">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a id="livros" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">

                                <!-- <form action="livros.php"> -->
                                    <?php foreach($livros as $l): ?>

                                        <li>
                                            <a class="dropdown-item" href="livro.php?livro=<?= $l["id"]; ?>"><?= $l["titulo"]; ?></a>
                                            <!-- <button name="livro" value="<?= $l["id"]; ?>" class="dropdown-item"><?= $l["titulo"]; ?></button> -->
                                        </li>

                                    <?php endforeach; ?>
                                <!-- </form> -->

                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </nav>

            </div>

        </div>

    </header>

    <br><br>

    <main id="main">
        <?php for($i=0; $i<20; $i++): ?>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, repellat a architecto est voluptate facilis sed dolores odit iste quis vero explicabo nisi. Suscipit et modi velit fugiat vero debitis.
            </p>
        <?php endfor; ?>
    </main>

    <footer>
        <a href="#" onclick="abrir()">Livros</a>
    </footer>
    

    <script>
        var pagina_atual = "<?= $rota[0]; ?>";
    </script>
    <script src="teste.js"></script>

</body>
</html>