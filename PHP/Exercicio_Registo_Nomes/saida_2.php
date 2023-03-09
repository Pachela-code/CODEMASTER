<?php

$total;

$lista_nomes = [];

$form = isset($_GET["nome_1"]) && isset($_GET["total"]);

if($form){

    $total = $_GET["total"];

    for($i=1; $i<=$total; $i++){
        $lista_nomes[] = $_GET["nome_" . $i];
    }

    /*$existe;
    $i = 1;

    do{

        $nome_input = "nome_" . $i;

        if(isset($_GET[$nome_input])){
            $lista_nomes[] = $_GET[$nome_input];
            $i++;
            $existe = true;
        }
        else{
            $existe = false;
        }

    }while($existe);*/

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Saída 2</title>
</head>
<body>

    <?php foreach($lista_nomes as $nome): ?>

        <p><?= $nome; ?></p>

    <?php endforeach; ?>

    <br><br>

    <?php print_r($lista_nomes); ?>

    <br>

    <?php print_r($total); ?>

    <br><br>

    <a href="index.php">Voltar</a>
    
</body>
</html>