<?php

$nome = "";
$preenchido = (!empty($_GET["nome"]));

if ($preenchido) {
  $nome = $_GET["nome"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <style>
    form,
    h1,
    h2 {
      text-align: center;
    }

    input {
      font-size: 20px;
      text-align: center;
    }

    div {
      background-color: rgba(255, 255, 255, 25%);
      width: 50%;
      margin: auto;
      border-radius: 20px;
      padding: 20px;
    }

    body {
      background-color: chocolate;
    }
  </style>

  <div>

    <form>
      <input type="text" name="nome" placeholder="Nome">
      <br><br>
      <input type="submit" value="Vamos!">
    </form>

  </div>

  <br><br>
  <?php

  if ($preenchido) {
    echo "
            <div>
                <h2>
                    Olá ($nome).
                </h2>
            </div>";
  }

  ?>

</body>

</html>