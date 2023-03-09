<?php


require_once("..//Exemplo_4/funcoes/base_dados.php");

if (isset($_POST['submit'])) {
  $search_by = $_POST['search_by'];
  $order = $_POST['order'];
  $order_by = $search_by == "" ? "" : " ORDER BY $search_by";
  $order_by .= $order == "descending" ? " DESC" : "";
  $lista_produtos = selectSQL("SELECT * FROM produtos $order_by");

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
    echo "Where's you god.";
  }
}
