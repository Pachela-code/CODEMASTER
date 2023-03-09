<?php

$number = "";
$form = isset($_GET["number"]);

if ($form) {
  $number = ($_GET["number"]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Saida</title>
</head>

<body>

  <?php for ($i = 0; $i < $number; $i++) : ?>

    <div class="filme">

      <img src="https://m.media-amazon.com/images/I/41RD76QWU-L._AC_SY780_.jpg" alt="book">
      <h3>FILME <?= $i + 1 ?> </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, mollitia!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, mollitia!</p>
      <button>14.99€</button>

    </div>

  <?php endfor; ?>

</body>

</html>