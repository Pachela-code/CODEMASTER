<?php

require_once("Pessoa.php");

$lista_pessoas = [
    new Pessoa("Fabricio Vidal", 27, 1.91, "Masculino"),
    new Pessoa("Alice Silva", 19, 1.53, "Outros"),
    new Pessoa("José Castro", 42, 1.71, "Masculino"),
    new Pessoa("Marta Sousa", 22, 1.65, "Feminino")
];

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
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="text-center">


    <div class="container">

        <div class="row caixa2">

            <div class="col py-4">

                <table class="w-75 mx-auto">
                    <tr>
                        <th>Posição</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Altura</th>
                        <th>Genero</th>
                    </tr>
                    
                    <?php for($i=0; $i<count($lista_pessoas); $i++): ?>

                        <?= $lista_pessoas[$i]->exibirLinhaNaTabela($i); ?>

                    <?php endfor; ?>

                </table>

            </div>

        </div>

    </div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>