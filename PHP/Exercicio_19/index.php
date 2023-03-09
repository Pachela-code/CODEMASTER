<?php

$valor = "";
$converte = "";

$form = isset($_GET["valor"]) && isset($_GET["converte"]);

if ($form) {
  $valor = floatval($_GET["valor"]);
  $converte = $_GET["converte"];
}


// Criado para fazer a conversão consoante a escolha dado no input 
$valorConversao = [
  'dolar' => 1.21,
  'libras' => 0.89,
  'reais' => 6.77,
  'iene' => 133.53,
];

// Funcao para converter o array global $valorConversao e retorna
function converterValor($valor, $conversao)
{
  global $valorConversao;
  return $valor * $valorConversao[$conversao];
}

// Verifica se o formulario foi submetido 
if (isset($_GET['valor']) && isset($_GET['converte'])) {
  // Retorna o valor e a moeda escolhida 
  $valor = $_GET['valor'];
  $converte = $_GET['converte'];

  // Converte o valor escrito para a moeda selecionada 
  $valorConvertido = converterValor($valor, $converte);
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
  color:brown; padding:20px; width: 50%;">
  <h1>Conversor Monetário</h1>
  <form action="">
    <div class="conversor" style="border: 2px solid; ">

      <label for="valor">Valor em Euros</label>
      <br>
      <input type="text" name="valor" min="1" required="required" value="<?= $valor; ?>">
      <br>
      <h1>Converter Para</h1>

      <!-- input para os valores -->
      <label for="dolar">Dólar</label>
      <!-- Operador ternario para cada um dos inputs -->
      <input type="radio" name="converte" value="dolar" <?= $converte == 'dolar' ? 'checked' : ''; ?>>

      <label for="libra">Libras</label>
      <input type="radio" name="converte" value="libras" <?= $converte == 'libras' ? 'checked' : ''; ?>>

      <label for="reais">Reais</label>
      <input type="radio" name="converte" value="reais" <?= $converte == 'reais' ? 'checked' : ''; ?>>

      <label for="iene">Iene</label>
      <input type="radio" name="converte" value="iene" <?= $converte == 'iene' ? 'checked' : ''; ?>>

      <br><br>
      <!-- input para submeter -->
      <input style="margin-bottom:10px" type="submit" value="CALCULAR!">
    </div>
    <br><br>

    <!-- Div para mostrar o resultados -->
    <?php if (isset($valorConvertido)) : ?>
      <div>
        Valor inserido: (<?= $valor; ?>€)
        <br>
        Valor convertido: (<?= $valorConvertido; ?>)
      </div>
      <br>
      <a href="index.php">
        <input type="reset" value="Reset">
      </a>
    <?php endif; ?>

  </form>
</body>

</html>