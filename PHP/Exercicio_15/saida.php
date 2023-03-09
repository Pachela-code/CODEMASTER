<?php

$nome;
$sobre;
$img = "perfil.jpg";
$qnt_antes;
$qnt_depois;

$form = isset($_GET["nome"]) && isset($_GET["sobre"]);
$form = $form && isset($_GET["perfis_anteriores"]) && isset($_GET["perfis_posteriores"]);

if($form){
    $nome = $_GET["nome"];
    $sobre = $_GET["sobre"];
    $qnt_antes = intval($_GET["perfis_anteriores"]);
    $qnt_depois = intval($_GET["perfis_posteriores"]);
    if($_GET["imagem"] != ""){
        $img = $_GET["imagem"];
    }
}
else{
    header("Location: entrada.php");
    exit();
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

    <header class="container py-4">

        <div class="row">

            <div class="col text-center">

                <h1 class="h1">Perfis</h1>

            </div>

        </div>

    </header>

    <main class="container mb-5">

        <div class="row d-flex justify-content-center gap-4">

            <?php for($i=0; $i<$qnt_antes; $i++): ?>

                <!-- Perfis Anteriores -->
                <!-- Card Inteiro -->
                <div class="col-8 px-0 d-flex justify-content-center border border-3 rounded-3">
                    <!-- Esquerda do card -->
                    <div>
                        <img src="perfil.jpg" alt="Perfil" class="imagem rounded-start">
                    </div>
                    <!-- Direita do card -->
                    <div class="p-2">
                        <div class="titulo">Perfil Anterior <?= ($i+1); ?></div>
                        <div class="texto mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At 
                            deleniti debitis quis est! Autem suscipit ipsa recusandae beatae 
                            consectetur optio veniam aperiam exercitationem ab? Nisi doloribus 
                            omnis commodi maiores sapiente.
                        </div>
                    </div>
                </div>

            <?php endfor; ?>

            <!-- Perfil do Usuario -->
            <!-- Card Inteiro -->
            <div class="col-8 px-0 d-flex justify-content-center border border-3 rounded-3" id="perfil-user">
                <!-- Esquerda do card -->
                <div>
                    <img src="<?= $img; ?>" alt="Perfil" class="imagem rounded-start">
                </div>
                <!-- Direita do card -->
                <div class="p-2 w-100">
                    <div class="titulo"><?= $nome; ?></div>
                    <div class="texto mt-2">
                        <?= $sobre; ?>
                    </div>
                </div>
            </div>

            
            <?php for($i=0; $i<$qnt_depois; $i++): ?>

                <!-- Perfis Posteriores -->
                <!-- Card Inteiro -->
                <div class="col-8 px-0 d-flex justify-content-center border border-3 rounded-3">
                    <!-- Esquerda do card -->
                    <div>
                        <img src="perfil.jpg" alt="Perfil" class="imagem rounded-start">
                    </div>
                    <!-- Direita do card -->
                    <div class="p-2">
                        <div class="titulo">Perfil Posterior <?= ($i+1); ?></div>
                        <div class="texto mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At 
                            deleniti debitis quis est! Autem suscipit ipsa recusandae beatae 
                            consectetur optio veniam aperiam exercitationem ab? Nisi doloribus 
                            omnis commodi maiores sapiente.
                        </div>
                    </div>
                </div>

            <?php endfor; ?>

        </div>

    </main>
    
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>