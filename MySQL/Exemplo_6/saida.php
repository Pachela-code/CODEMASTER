<?php
require_once("..//Exemplo_5/funcoes/base_dados.php");
// Ver todos os produtos
$lista_produtos = selectSQL("SELECT * FROM produtos");

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
}

echo "<br><br><a href='index.php'><button>Add New Item</button></a>";
