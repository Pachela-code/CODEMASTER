<?php
require_once("..//Exemplo_5/funcoes/base_dados.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..//Exemplo_5/CSS/style.css">
  <title>The walllsss</title>
</head>

<body>

  <?php
  if (isset($_POST['submit'])) {


    $min_price = floatval($_POST['min_price']);
    $max_price = floatval($_POST['max_price']);
    $order = $_POST['order'];
    $lista_produtos = selectSQL("SELECT * FROM produtos WHERE preco BETWEEN '$min_price' AND '$max_price' ORDER BY preco $order");
  }

  if (count($lista_produtos) > 0) {
    echo "<table>";
    echo "<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              </tr>";


    foreach ($lista_produtos as $row) {
      echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['preco'] . "</td>
                <td>" . $row['quantidade'] . "</td>
                </tr>";
    }
    echo "</table>";
  } else {
    echo "EH EH EH";
    echo "<img src=https://upload.wikimedia.org/wikipedia/commons/f/f7/Generic_error_message.png>";
  }

  ?>


</body>

</html>