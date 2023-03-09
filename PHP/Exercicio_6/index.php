<?php

$nome = "";
$cor = "black";

$formulario_preenchido = (!empty($_GET["nome"]) && !empty($_GET["cor"]));

if ($formulario_preenchido) {
  $nome = $_GET["nome"];
  $cor = $_GET["cor"];
}


?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>

  <style>
    body {
      background-color: <?= $cor; ?>;
      color: white;
      font-family: "Courier New";
    }

    div {
      background-color: rgba(255, 255, 255, 25%);
      width: 50%;
      margin: auto;
      border-radius: 20px;
      padding: 20px;
    }

    form,
    h1,
    h2 {
      text-align: center;
    }

    input {
      font-size: 20px;
      text-align: center;
    }
  </style>

</head>

<body>

  <h1>Teste de Formulário</h1>

  <div>
    <form>
      <input type="text" name="nome" placeholder="Nome">
      <br><br>
      <input type="text" name="cor" placeholder="Cor em Inglês">
      <br><br>
      <input type="submit" value="Vamos!">
    </form>
  </div>

  <br><br>

  <?php

  if ($formulario_preenchido) {
    echo "
            <div>
                <h2>
                    Olá ($nome), vejo que escolhetes a cor ($cor).
                </h2>
            </div>";
  }

  ?>

</body>

</html>