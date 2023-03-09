<?php

require_once("../funcoes/funcoes.php");

if(!verificarLogado()){
    header("Location: ../../index.php");
    exit();
}

$id = $_SESSION["usuario"]["id"];
$meus_acessos = selectSQL("SELECT * FROM acessos WHERE id_usuario=$id");
$todos_acessos = selectSQL("SELECT * FROM acessos");
$ultimo_acesso = selectSQL("SELECT data_acesso FROM acessos WHERE id_usuario=$id ORDER BY id DESC");
$ultimo_acesso = (isset($ultimo_acesso[1])) ? $ultimo_acesso[1]["data_acesso"] : $ultimo_acesso[0]["data_acesso"];

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
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body class="text-center">

    <div class="container">
        <div class="row">
            <div class="col caixa2 py-4">

                <h3>Home</h3>

                <br>

                <a href="logoff.php">
                    <button>Sair</button>
                </a>

                <br>
                <br>

                <h5>
                    Bem-vindo (<?= $_SESSION["usuario"]["nome"]; ?>)
                    <br>
                    Data do seu último acesso: (<?= $ultimo_acesso; ?>)
                </h5>

                <br>

                <table class="w-50 mx-auto">

                    <tr>
                        <th>SEUS ACESSOS</th>
                    </tr>

                    <?php for($i=count($meus_acessos)-1; $i>=0; $i--): ?>
                    
                        <tr>
                            <td>
                                <?= ($i+1) ?> - (<?= $meus_acessos[$i]["data_acesso"]; ?>)
                            </td>
                        </tr>

                    <?php endfor; ?>

                </table>

                <br>

                <table class="w-75 mx-auto">

                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Data de Acesso</th>
                    </tr>

                    <?php for($i=count($todos_acessos)-1; $i>=0; $i--): ?>
                    
                        <tr>
                            <td><?= ($i+1) ?></td>
                            <td><?= getNomeUsuario($todos_acessos[$i]["id_usuario"]); ?></td>
                            <td><?= $todos_acessos[$i]["data_acesso"]; ?></td>
                        </tr>

                    <?php endfor; ?>

                </table>

            </div>
        </div>
    </div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>