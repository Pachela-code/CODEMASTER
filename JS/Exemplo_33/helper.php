<?php

require_once("base_dados.php");
function getTodosLivrosMenu(){
    return selectSQL("SELECT id,titulo FROM livros");
}

function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id=$id");
}

?>