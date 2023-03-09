<?php
require_once("..//Exemplo_3/funcoes/base_dados.php");

if (isset($_POST['product-id'])) {


  $product_id = $_POST['product-id'];

  $product = selectSQL("SELECT * FROM produtos WHERE id = '$product_id'");


  if (count($product) > 0) {
    echo '<table style="background-color: #f0f0f0">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
    echo '<th>Quantity</th>';
    echo '</tr>';
    foreach ($product as $produto) {
      echo '<tr>';
      echo '<td>' . $produto["id"] . '</td>';
      echo '<td>' . $produto["nome"] . '</td>';
      echo '<td>' . number_format($produto["preco"], 2) . '</td>';
      echo '<td>' . $produto["quantidade"] . '</td>';
      echo '</tr>';
    }
    echo '</table>';
    echo '<br> <br>';
    echo '<br><br> <a href="index.php"><button>Return to Main Page</button></a>';
  } else {
    echo "product ID not found";
    echo '<br><br> <a href="index.php"><button>Return to Main Page</button></a>';
  }
} else {
  echo "Please enter a product ID";
}
