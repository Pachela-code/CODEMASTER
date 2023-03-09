<?php

$pessoa;

$form = isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["altura"]);

if($form){
    $pessoa = [
        "idade" => $_GET["idade"],
        "altura" => $_GET["altura"],
        "nome" => $_GET["nome"],
    ];

    $pessoa["apelido"] = "Vidal";
    $pessoa["idade"] = 10;
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

    <h1>Entrada</h1>

    <form action="">
        <input type="text" name="nome" placeholder="Nome" required="required">
        <br><br>
        <input type="number" name="idade" placeholder="Idade" min="0" required="required">
        <br><br>
        <input type="number" name="altura" placeholder="Altura" step="0.01" min="0" required="required">
        <br><br>
        <input type="submit" value="Registar">
    </form>

    <?php if($form): ?>

        <br><br>

        <div>
            <h2>Nome: <?= $pessoa["nome"]; ?></h2>
            <h2>Idade: <?= $pessoa["idade"]; ?></h2>
            <h2>Altura: <?= $pessoa["altura"]; ?></h2>
            <br>
            <a href="index.php">
                <button>RESET</button>
            </a>
        </div>
        
        <br><br>

        <div>
            <pre>
<?php print_r($pessoa); ?>
            </pre>
        </div>

    <?php endif; ?>

</body>
</html>