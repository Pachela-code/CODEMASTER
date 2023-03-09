<?php

require_once("funcoes.php");

$numero;
$funcao;
$resultado;

$form = isset($_GET["numero"]) && isset($_GET["funcao"]);

if ($form) {
    $numero = intval($_GET["numero"]);
    $funcao = $_GET["funcao"];
    $resultado = ($funcao == "dobro") ? dobro($numero) : quadrado($numero);
    /*if($funcao == "dobro"){
        $resultado = dobro($numero);
    }
    else{
        $resultado = quadrado($numero);
    }*/
}


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>

    <form>

        <label for="numero">Número: </label>
        <input type="number" name="numero" required="required">

        <br><br>

        <label for="funcao">Função: </label>
        <select name="funcao" required="required">
            <option value="">---</option>
            <option value="dobro">Dobro</option>
            <option value="quadrado">Quadrado</option>
        </select>

        <br><br>

        <input type="submit" value="Enviar">

    </form>

    <br><br>

    <?php if ($form) : ?>
        <div>
            Número digitado = (<?= $numero; ?>).
            <br>
            Função selecionada = (<?= $funcao; ?>).
            <br>
            Resultado = (<?= $resultado; ?>)
        </div>
    <?php endif; ?>

</body>

</html>