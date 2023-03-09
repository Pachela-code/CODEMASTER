<?php

$vector_novo = [1, "ola pessoas", true, -5.69];
$vector_antigo = array(-8, 0);

$vector_novo[] = 9;
array_push($vector_antigo, 4, 5, "Boa Noite", 9, 7);

echo $vector_novo[0];
echo "<br>";
echo $vector_antigo[4];

echo "<br>";
print_r($vector_novo);
echo "<br>";
var_dump($vector_antigo);
