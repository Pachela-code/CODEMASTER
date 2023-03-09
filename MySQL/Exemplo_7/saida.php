<?php
require_once("..//Exemplo_7/funcoes/base_dados.php");

$form = isset($_GET["id"]);

if ($form) {
  $id = $_GET["id"];
  iduSQL("DELETE FROM produtos WHERE id = '$id'");
}

$lista_produtos = selectSQL("SELECT * FROM produtos");


if (count($lista_produtos) > 0) {
  echo "<table>";
  echo "<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Delete</th>
              </tr>";

  foreach ($lista_produtos as $row) {
    echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['preco'] . "</td>
                <td>" . $row['quantidade'] . "</td>
                <td><form action =''>
                <button ='iduSQL(" . $row['id'] . ")'>Delete</button>
                </form>
                </td>
                </tr>";
  }
  echo "</table>";
  echo "<form>
        <input type='button' value='Return' onClick='location.href=`index.php`'>
        </form>";
}
