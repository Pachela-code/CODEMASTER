<?php

$peso = 0;
$kilo = 0;
$result = 0;

$form = isset($_GET["peso"]);


if ($form) {
  $peso = floatval($_GET["peso"]);
  $kilo = floatval($_GET["kilo"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<style>
  body {
    background-color: black;
    color: red;
    display: inline-block;
    font-size: 23px;
  }

  h1 {
    text-align: center;
  }

  #talho {
    border-radius: 50px;
    background-image: url(../Exercicio_13/balanca.png);
    width: 500px;
    height: 350px;
    border: 1px solid black;
    position: relative;
  }

  #talhoo span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-150%, -50%);
  }

  input {
    border-radius: 30px;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>TALHO</h1>

  <div>
    <form>
      <input type="number" name="peso" required="required" step="0.01" placeholder="PESO">
      <input type="number" name="kilo" required="required" step="0.01" placeholder="PREÇO/KG">
      <input type="submit" value="CALCULAR">
    </form>
  </div>

  <br><br>


  <div id="talho">

    <span id="peso"> <?= number_format($peso, 2); ?></span>
    <span id="kilo"><?= number_format($kilo, 2); ?></span>
    <span id="result"> <?= number_format($result = $peso * $kilo, 2); ?></span>

  </div>



</body>

</html>