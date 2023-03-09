<?php
require_once("base_dados.php");


if (isset($_GET["nome"], $_GET["preco"], $_GET["quantidade"])) {
  $id = $_GET["id"];
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];
  $quantidade = $_GET["quantidade"];


  iduSQL("UPDATE produtos SET nome = '$nome', preco = $preco, quantidade = $quantidade WHERE id = $id");
}


$produtos = selectSQL("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kikas</title>
  <style>
    body {
      background-color: #F0F8FF;
    }
  </style>
</head>

<body>
  <h1>Lista de Produtos registados</h1>
  <table>
    <tr>
      <th>Nome</th>
      <th>Preco</th>
      <th>Quantidade</th>
      <th>Ações</th>
    </tr>
    <?php foreach ($produtos as $p) : ?>
      <tr>
        <td><?= $p["nome"]; ?></td>
        <td><?= number_format($p["preco"], 2); ?> €</td>
        <td><?= $p["quantidade"]; ?></td>
        <td>
          <form method="get" action="edit.php">
            <input type="hidden" name="id" value="<?= $p["id"]; ?>">
            <input type="submit" value="Editar">
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>