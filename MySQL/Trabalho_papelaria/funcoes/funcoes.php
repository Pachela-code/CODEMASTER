<?php

require_once("base_dados.php");

date_default_timezone_set("Europe/Lisbon");

function fazerLogin($username, $password){
    $resultado = selectSQLUnico("SELECT * FROM users WHERE username='$username' AND password='$password';");
    
    if(!empty($resultado)){
        session_start();
        $_SESSION["username"] = $resultado["username"];
        $_SESSION["nome"] = $resultado["nome"];
        $id = $resultado["id"];
        
        return true;
    }
    else{
        return false;
    }
    
}

function verificarLogado(){
    session_start();
    $sessao = isset($_SESSION["username"]) && isset($_SESSION["nome"]);
    return $sessao;
}
