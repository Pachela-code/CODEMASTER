<?php

$valor = "";
$converte = "";

$form = isset($_GET["valor"])
  && isset($_GET["converte"]);
if ($form) {
  $valor = $_GET["valor"];
  $converte = $_GET["converte"];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor Monetário</title>
</head>

<body style="text-align: center; align-items: center; background-color: black; 
  color: white; padding:20px; width: auto;">
  <h1>Conversor Monetário</h1>
  <form action="">
    <div class="conversor" style="border: 2px solid; ">

      <label for="valor">Valor em Euros</label>
      <br>
      <input type="text" name="valor" min="1" required="required">
      <br>
      <h1>Converter Para</h1>

      <!-- input para os valores -->
      <label for="dolar">Dólar</label>
      <input type="radio" name="dolar" value="<?= $dolar; ?>">
      <label for="libra">Libras</label>
      <input type="radio" name="libra" value="<?= $libras; ?>">
      <label for="reais">Reais</label>
      <input type="radio" name="reais" value="<?= $reais; ?>">
      <label for="iene">Iene</label>
      <input type="radio" name="iene" value="<?= $iene; ?>">
      <br><br>
      <!-- input para submeter -->
      <input style="margin-bottom:10px" type="submit" value="CALCULAR!">
    </div>
    <br><br>

    <!-- Div para mostrar o resultados -->
    <?php if ($form) : ?>
      <div>
        Valor inserido: (<?= $valor; ?>€)
        Valor convertido (<?= $converte; ?>)
        <br>
      </div>
    <?php endif; ?>

  </form>
</body>

</html>