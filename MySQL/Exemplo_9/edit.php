<?php

require_once("base_dados.php");

$form = isset($_POST["id"]);

if ($form) {
  $id = $_POST["id"];
  $produto = selectSQLUnico("SELECT * FROM produtos WHERE id = '$id'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <style>
    body {
      background-color: #F0F8FF;
    }
  </style>

</head>

<body>
  <h1>Editar registo</h1>

  <div>
    <form action="paginacao.php" method="get">
      <label for="nome">Nome</label>
      <input type="text" name="nome" value="<?= $produto["nome"]; ?>" required="required" autofocus><br>
      <label for="preco">Preco</label>
      <input type="number" name="preco" value="<?= $produto["preco"]; ?>" step="0.01" min="0" required="required"><br>
      <label for="quantidade">Quantidade</label>
      <input type="number" name="quantidade" value="<?= $produto["quantidade"]; ?>" step="1" min="1" required="required"><br><br>


      <input type="hidden" name="id" value="<?= $id; ?>">
      <input type="submit" value="Editar">
    </form>
  </div>
</body>

</html>