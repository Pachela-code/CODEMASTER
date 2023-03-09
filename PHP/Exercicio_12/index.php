<?php

$raio;
$resultado;

$form = isset($_GET["raio"]);

if($form){
    $raio = floatval($_GET["raio"]);
    $resultado = 2 * $raio * M_PI;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>CÁLCULO DO COMPRIMENTO DA CIRCUNFERÊNCIA</h1>

    <div>
        <form>
            <input type="number" name="raio" step="0.01" min="0" placeholder="RAIO">
            <br><br>
            <input type="submit" value="CALCULAR">
        </form>
    </div>

    <?php if($form): ?>

        <div id="circulo">
            <span id="raio"><?= number_format($raio, 2); ?></span>
            <span id="resultado"><?= number_format($resultado, 2); ?></span>
        </div>

    <?php endif; ?>
    
</body>
</html>