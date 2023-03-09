<?php

function calcularImc($peso, $altura){
    $imc = $peso / ($altura ** 2);
    return number_format($imc, 1);
}

?>