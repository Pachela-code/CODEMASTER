<?php

function loginExiste($lista_usuarios, $lista_senhas, $usuario, $senha){

    for($i=0; $i<count($lista_usuarios); $i++){
        if($lista_usuarios[$i] == $usuario){
            if($lista_senhas[$i] == $senha){
                return true;
            }
        }
    }

    return false;

}


?>