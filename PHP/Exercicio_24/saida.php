<?php

if (isset($_GET["total"])) {
  $total = intval($_GET["total"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saida</title>
</head>

<body>
  <form action="processar.php">
    <?php for ($i = 0; $i < $total; $i++) : ?>
      <input type="text" name="nome" placeholder="Nome">
      <br>
    <?php endfor; ?>
    <input type="submit" value="Registar">
  </form>
</body>

</html>