<?php

// Adiciona os "pré definidos" para teste 

$people = [
  'Saitama' => ['weight' => 70, 'height' => 1.75],
  'Trunks' => ['weight' => 65, 'height' => 1.73],
  'Goku' => ['weight' => 86, 'height' => 1.75],
  'Vegeta' => ['weight' => 77, 'height' => 1.60],
  'Goten' => ['weight' => 51, 'height' => 1.23],
];

// Verificar se o formulario foi submetido

if (isset($_POST['submit'])) {

  // Dados do formulario, atenção aos nomes devem se 
  // manter iguais ao usado no form 

  $name = $_POST['name'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];

  // Para adicionar uma pessoa através do preenchimento do form

  $people[$name] = ['weight' => $weight, 'height' => $height];

  // Alinhar em ordem decrescente

  ksort($people);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Super People</title>
</head>

<body style=" justify-content:center; color:black; text-align:center;background-color:bisque">
  <h1>List of Super People</h1>
  <ul>

    <!-- Buscar a chave do loop -> $name para o nome e $person para
    as caracteristicas $weight e $height -->

    <?php foreach ($people as $name => $person) : ?>
      <li style="margin:10px 0; padding:10px; list-style: none;">
        Name: <?php echo ($name); ?><br>
        Weight: <?php echo round($person['weight']); ?> kg<br>
        Height: <?php echo ($person['height']); ?> m<br>
        Fatness: <?php echo round($person['weight'] / ($person['height'] * $person['height']), 2); ?>

      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>