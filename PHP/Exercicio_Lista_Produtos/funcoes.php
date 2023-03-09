<?php


function burcarMaisCaro($lista){

    $pos_do_mais_caro = 0;

    for($i=0; $i<count($lista); $i++){

        if($lista[$pos_do_mais_caro] < $lista[$i]){
            $pos_do_mais_caro = $i;
        }

    }

    return $pos_do_mais_caro;

}

function mediaDosPrecos($lista){
    $soma = 0;
    foreach($lista as $n){
        $soma += $n;
    }
    return $soma / count($lista);
}


?>