<?php

require_once("php/funcoes/base_dados.php");

$lista_produtos = selectSQL("SELECT * FROM produtos");
$lista_colaboradores = selectSQL("SELECT * FROM colaboradores");


foreach($lista_produtos as $produto){
    echo $produto["id"] . " = " . $produto["nome"] . " (". number_format($produto["preco"], 2) . ") [". $produto["quantidade"] . "]<br>";
}

echo "<hr>";

foreach($lista_colaboradores as $colaborador){
    echo $colaborador["id"] . " = " . $colaborador["nome"] . " " . $colaborador["apelido"] . " (". $colaborador["idade"] . ") [". $colaborador["morada"] . "]<br>";
}



?>