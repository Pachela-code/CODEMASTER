<?php
require_once("base_dados.php");
$total_per_page = 3;
$page_number = 1;

if (isset($_GET["page_number"])) {
  $page_number = ($_GET["page_number"]);
}

if (isset($_GET["total_per_page"])) {
  $total_per_page = ($_GET["total_per_page"]);
}

$produtos = selectSQL("SELECT * FROM produtos");
$total_page = ceil(count($produtos) / $total_per_page);
$current_page = array_slice($produtos, ($page_number - 1) * $total_per_page, $total_per_page);

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
    <?php foreach ($current_page as $p) : ?>
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
  <form>
    <label for="total_per_page">3</label>
    <input type="radio" name="total_per_page" value="3" <?= ($total_per_page == 3) ? "checked" : ""; ?>>
    <label for="total_per_page">5</label>
    <input type="radio" name="total_per_page" value="5" <?= ($total_per_page == 5) ? "checked" : ""; ?>>
    <label for="total_per_page">7</label>
    <input type="radio" name="total_per_page" value="7" <?= ($total_per_page == 7) ? "checked" : ""; ?>>
    <br>

    <button type="submit" name="page_number" value="<?= $page_number - 1 ?>" <?= ($page_number == 1) ? "disabled" : ""; ?>>
      < </button>
        <?php for ($i = 0; $i < $total_page; $i++) : ?>
          <input type="submit" name="page_number" value="<?= $i + 1 ?>">
        <?php endfor; ?>

        <button type="submit" name="page_number" value="<?= $page_number + 1 ?>" <?= ($page_number == $total_page) ? "disabled" : ""; ?>>
          >
        </button>
  </form>
</body>

</html>