<?php

require_once("php/funcoes/funcoes.php");

$form = isset($_POST["usuario"]) && isset($_POST["senha"]);

if($form){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if(fazerLogin($usuario, $senha)){
        header("Location: php/paginas/home.php");
        exit();
    }
}

if(verificarLogado()){
    header("Location: php/paginas/home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="text-center">

    <div class="container">
        <div class="row">
            <div class="col-5 py-4 caixa2 mx-auto">

                <h3>Login</h3>

                <br>    

                <?php if($form): ?>
                    <h5 class="text-danger">Login Inválido!</h5>
                <?php endif; ?>

                <br>

                <form action="" method="post">
                    <input type="text" name="usuario" placeholder="Usuário" required="required" autofocus>
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" required="required">
                    <br><br>
                    <input type="submit" value="Acessar">
                </form>

            </div>
        </div>
    </div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>