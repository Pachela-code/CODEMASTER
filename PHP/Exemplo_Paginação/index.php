<?php

require_once("classes/Produto.php");

$lista_produto = [];

for($i=0; $i<25; $i++){
    $lista_produto[] = new Produto("Livro ".($i+1), 19.99, 30);
}

$elementos_por_pagina = 5;
$numero_pagina = 1;

if(isset($_GET["numero_pagina"])){
    $numero_pagina = intval($_GET["numero_pagina"]);
}

if(isset($_GET["elementos_por_pagina"])){
    $elementos_por_pagina = intval($_GET["elementos_por_pagina"]);
}

$numero_total_paginas = ceil(count($lista_produto) / $elementos_por_pagina);
$pagina_atual = array_slice($lista_produto, ($numero_pagina-1)*$elementos_por_pagina, $elementos_por_pagina);

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
            <div class="col caixa2 text-center py-4">
            
                <table class="mx-auto w-75">

                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>

                    <?php foreach($pagina_atual as $produto): ?>
                        
                        <tr>
                            <td><?= $produto->nome; ?></td>
                            <td><?= number_format($produto->preco, 2); ?> €</td>
                            <td><?= $produto->quantidade; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </table>

                <br><br>

                <form action="">

                    <div class="d-flex justify-content-center gap-3">
                    
                        <div>
                            <label for="elementos_por_pagina">4: </label>
                            <br>
                            <input type="radio" name="elementos_por_pagina" value="4" <?= ($elementos_por_pagina == 4) ? "checked" : ""; ?>>
                        </div>

                        <div>
                            <label for="elementos_por_pagina">12: </label>
                            <br>
                            <input type="radio" name="elementos_por_pagina" value="12" <?= ($elementos_por_pagina == 12) ? "checked" : ""; ?>>
                        </div>

                        <div>
                            <label for="elementos_por_pagina">20: </label>
                            <br>
                            <input type="radio" name="elementos_por_pagina" value="20" <?= ($elementos_por_pagina == 20) ? "checked" : ""; ?>>
                        </div>
                    
                    </div>

                    <br><br>

                    <?php if($numero_pagina > 1): ?>
                        <button type="submit" name="numero_pagina" value="<?= $numero_pagina-1 ?>"><</button>
                    <?php endif; ?>

                    <?php for($i=1; $i<=$numero_total_paginas; $i++): ?>

                        <input type="submit" class="<?= ($numero_pagina == $i) ? "active" : ""; ?>" name="numero_pagina" value="<?= $i ?>">

                    <?php endfor; ?>

                    <?php if($numero_pagina < $numero_total_paginas): ?>
                        <button type="submit" name="numero_pagina" value="<?= $numero_pagina+1 ?>">></button>
                    <?php endif; ?>

                </form>
            
            </div>
        </div>
    </div>
    

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>