<?php

$total;

$form = isset($_GET["total"]);

if($form){
    $total = intval($_GET["total"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Saída</title>
</head>
<body>

    <form action="saida_2.php">

        <input type="hidden" name="total" value="<?= $total ?>">

        <?php for($i=0; $i<$total; $i++): ?>

            <input type="text" name="nome_<?= ($i+1) ?>" placeholder="Nome <?= ($i+1) ?>">
            <br>

        <?php endfor; ?>

        <input type="submit" value="Registar">

    </form>
    
</body>
</html>