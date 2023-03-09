<?php

require_once("base_dados.php");

function fazerLogin($usuario, $senha){
    $resultado = selectSQLUnico("SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha'");

    if(!empty($resultado)){
        session_start();
        $_SESSION["usuario"] = $resultado;
        registarNovoAcesso($resultado["id"]);
        return true;
    }
    else{
        return false;
    }
}

function verificarLogado(){
    session_start();
    return isset($_SESSION["usuario"]);
}

function registarNovoAcesso($id_usuario){
    date_default_timezone_set("Europe/Lisbon");
    $data = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (id_usuario,data_acesso) VALUES ('$id_usuario', '$data')");
}

function getNomeUsuario($id_usuario){
    $resultado = selectSQLUnico("SELECT nome FROM usuarios WHERE id='$id_usuario'");
    return $resultado["nome"];
}

?>