<?php

// Inicializa o array com 5 produtos predefenidos e os preços
$products = [
  ["name" => "Cafe", "price" => 1.00],
  ["name" => "Pão", "price" => 2.00],
  ["name" => "Bolo", "price" => 3.50],
  ["name" => "Sumo", "price" => 4.99],
  ["name" => "Salgados", "price" => 5.50]
];


// Busca o nome e o preço do formulario
$name = $_GET["name"];
$price = floatval($_GET["price"]);

// Adiciona um novo produto ao array
$products[] = array("name" => $name, "price" => $price);

// Busca o produto com o valor mais elevado
$most_expensive_product = array("name" => "", "price" => 0);
foreach ($products as $product) {
  if ($product["price"] > $most_expensive_product["price"]) {
    $most_expensive_product = $product;
  }
}

// Inicializa a variavel
$total_price = 0;
foreach ($products as $product) {
  $total_price += $product["price"];
}
$average_price = $total_price / count($products);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Product List</title>
</head>

<body>
  <h1>Product List</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>Price</th>
    </tr>
    <?php foreach ($products as $product) : ?>
      <tr>
        <td><?= $product["name"] ?></td>
        <td><?= $product["price"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h2>Most Expensive Product</h2>
  <p><?= $most_expensive_product["name"] ?> (€<?= $most_expensive_product["price"] ?>)</p>
  <p>Average price: €<?= $average_price ?></p>

</body>

</html>