<!--- PHP --->

<?php

$raio = "";
$result = "";

$second_img = "https://lh3.googleusercontent.com/j3Ow4WgmAPZn3-Qnbp9VpuJeLHME_rCGS_US-79MJRlqYniuyuvQjbiNY9WmnnrErK_8VBw7YNzNDjI=h360";

$form = isset($_GET["raio"]);

if ($form) {
  $raio = floatval($_GET["raio"]);

  $result = number_format((2 * M_PI * $raio), 1);
}
?>

<!--- PHP -->

<!--- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Calculo do comprimento da circunferência</title>
</head>

<body>

  <div>
    <form>

      <input type="number" name="raio" step="0.01" placeholder="raio" min="0" required="required">
      <br>
      <input type="submit" value="CALCULAR">

    </form>
  </div>

  <br><br>

  <!-- PHP -->

  <?php if ($form) : ?>
    <div style="background-image: url(<?= $second_img ?>);">
      <p><?= $result ?></p>
      <span><?= $raio ?></span>
    </div>
  <?php endif; ?>

</body>

</html>