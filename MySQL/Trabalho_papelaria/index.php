<?php

require_once("funcoes/funcoes.php");

// Check if user is already logged in
if (verificarLogado()) {
    header("Location: home.php");
    exit();
}

// Check if the form was submitted
$form = isset($_POST["username"]) && isset($_POST["password"]);

if ($form) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (fazerLogin($username, $password)) {
        header("Location: home.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo - Papelaria</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center">
    <header class="box">
        <h1 class="text-center titulo">Sistema da papelaria 2023</h1>
    </header>

    <main class="box d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="row text-center">
                <h5 class="text-center subtitulo">login</h5>
            </div>
            <div class="col d-flex">
                <form action="" method="post" class=" form-margin mx-auto d-flex justify-content-center align-items-center flex-column">

                    <!-- Mostra mensagem em caso de erro -->
                    <?php if ($form) : ?>
                        <p class="text-danger fw-bold">Login Inválido, tente novamente!!</p>
                        <br>
                    <?php else : ?>
                        <br>
                        <br>
                    <?php endif; ?>

                    <input type="text" name="username" placeholder="nome" class="text-center">
                    <br>
                    <input type="password" name="password" placeholder="senha" class="text-center">
                    <br>
                    <input type="submit" value="ENTRAR" class="botao">
                </form>
            </div>
        </div>
    </main>

    <footer class=" fixed-bottom text-center fw-bolder">
        Papelaria PHP + MySQL
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>