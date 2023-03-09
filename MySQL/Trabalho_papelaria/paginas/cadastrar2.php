<?php
require_once("../funcoes/base_dados.php");

$form = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if ($form) {
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    iduSQL("INSERT INTO produtos ( nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade') ");

    header("Location: cadastrar.php?success=1");
} else {
    header("Location: cadastrar.php?success=2");
}
