<?php

$base_dados = [
    "host" => "localhost",
    "usuario" => "root",
    "senha" => "",
    "nome" => "empresa"
];

function selectSQL($sql){
    global $base_dados;

    $conexao = mysqli_connect($base_dados["host"], $base_dados["usuario"], $base_dados["senha"], $base_dados["nome"]);
    $consulta = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    mysqli_close($conexao);

    return $resultado;
}

?>