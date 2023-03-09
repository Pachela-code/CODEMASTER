<?php

$base_dados = [
    "host" => "localhost",
    "usuario" => "root",
    "senha" => "",
    "nome" => "empresa"
];

function selectSQL($sql)
{
    global $base_dados;

    $conexao = mysqli_connect($base_dados["host"], $base_dados["usuario"], $base_dados["senha"], $base_dados["nome"]);
    $consulta = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    mysqli_close($conexao);

    return $resultado;
}


// ACABEI NAO USANDO ISTO \o/
function selectSQLUnique($sql)
{
    global $data_base, $connection;

    $connection = mysqli_connect($data_base["host"], $data_base["user"], $data_base["pass"], $data_base["name"]);
    $request = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($request);

    mysqli_close($connection);

    return $result;
}


function iduSQL($sql)
{
    global $base_dados;

    $conexao = mysqli_connect($base_dados["host"], $base_dados["usuario"], $base_dados["senha"], $base_dados["nome"]);
    $consulta = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    return $consulta;
}
