<?php

$lista_nomes = ["Marcos", "Jose", "Olivia", "Fernanda", "Luisa", "Josefina", "Ana"];
$lista_sobrenomes = ["Silva", "Santos", "Rodrigues", "Gomes", "Lopez", "Pereira", "Gonzalez"];

for ($i = 0; $i < count($lista_nomes); $i++) {
  $random_name = $lista_nomes[array_rand($lista_nomes)];
  $random_surname = $lista_sobrenomes[array_rand($lista_sobrenomes)];
  echo $random_name . " " . $random_surname . "<br>";
}
