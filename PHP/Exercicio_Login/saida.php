<?php

require_once("funcoes.php");

$lista_usuarios = ["fabricio", "codemaster", "maria", "jose", "bruno"];
$lista_senhas = ["teste", "123", "ola", "@#teste_2022", "love"];

$usuario;
$senha;

$form = isset($_POST["usuario"]) && isset($_POST["senha"]);
$login = false;

if($form){
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $login = loginExiste($lista_usuarios, $lista_senhas, $usuario, $senha);

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Saída</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-black text-white">

    <div class="container">

        <?php if($form && $login): ?>

            <div class="row">
                <div class="col-6 mx-auto text-center text-success text-uppercase">
                    <h3>Bem-vindo fulano a sua página secreta.</h3>
                </div>
            </div>
        
        <?php else: ?>

            <div class="row">
                <div class="col-6 mx-auto text-center text-danger">
                    <h5>Login inválido.<br>Tente novamente</h5>
                    <a href="index.php">Voltar</a>
                </div>
            </div>

        <?php endif; ?>

    </div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>