<?php

require_once(".//MySQL/Exemplo_8/php/funcoes/base_dados.php");

$form = isset($_GET["id"])
    && isset($_GET["nome"])
    && isset($_GET["preco"])
    && isset($_GET["quantidade"]);

if ($form) {

    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade' WHERE id= $id");

    echo "SUCESS!!";
} else {
    echo "ERROR!!";
}
