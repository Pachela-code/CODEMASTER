<?php
require_once("..//Exemplo_5/funcoes/base_dados.php");

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];

  // INSERIR NOVO PRODUTO NA BASE DE DADOS
  iduSQL("INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')");

  header("Location: saida.php");
}
