<?php

$lista_nomes = ["Fabricio", "Bruno", "Débora", "Ana", "Marcos", "Manel", "Paulo", "Ricardo"];
$lista_apelidos = ["Vidal", "Silva", "Sousa", "Carvalho", "Lima", "Roque", "Andrade"];

$total;

$form = isset($_GET["total"]);

if ($form) {
  $total = intval($_GET["total"]);
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
    <label for="total">Total nomes a serem gerados: </label>
    <input type="number" min="0" required="required" name="total">
    <input type="submit" value="Gerar">
  </form>

  <br><br>

  <div>

    <?php if ($form) : ?>

      <?php for ($i = 0; $i < $total; $i++) : ?>

        <?= $lista_nomes[rand(0, count($lista_nomes) - 1)]; ?>
        <?= $lista_apelidos[rand(0, count($lista_apelidos) - 1)]; ?>
        <br>

      <?php endfor; ?>

    <?php endif; ?>

  </div>

</body>

</html>