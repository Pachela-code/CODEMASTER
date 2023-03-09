<?php

$temp = "";
$img = "";


$gelo = "https://lh6.googleusercontent.com/MoSck0LGjR00D50ijbdJATmOV4kqxGlHYpOsDxGravnWFM0QR7GCKH9SSuvIAvaBzQPh2jhbAt2Mbyc=w1903-h929";
$agua = "https://lh3.googleusercontent.com/AAZKtQiM4QPHqyKL_f6CO079PAxFBUsgF2rn67GESwbx_7NkqHZ3a6LQjvsNgBukttgq8HiNDz1_PhA=w1903-h929";
$vapor = "https://lh6.googleusercontent.com/7mSLmwbBdhY5qiRJTyj_TgURvaDH9h8x3v_lrNQSkVmLZBWMPnjjuZFHRSduHtkzey9UPGv-JSBVbWc=w1903-h929";

$form = isset($_GET["temp"]);

if ($form) {
  $temp = floatval($_GET["temp"]);

  $temperature_f_formatted = ($temp * 1.8) + 32;
  $temperature_k_formatted = ($temp + 273.15);

  if ($temp <= 0) {
    $img = $gelo;
  } elseif ($temp > 100) {
    $img = $vapor;
  } else {
    $img = $agua;
  }
}

?>


<!-- PHP RELATED -->


<!-- HTML CONTENT -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>TEMP</title>
</head>

<body>

  <form>
    <label>Insira a temperatura:</label>
    <br>
    <input type="text" name="temperatura" placeholder="temperatura" required="required">
    <br>
    <input type="submit" value="show time">
  </form>

  <br><br>

  <?php if ($form) : ?>
    <div>
      <img src="<?= $img ?>" alt="<?= $temp ?> graus">
    </div>
  <?php endif; ?>
</body>

</html>