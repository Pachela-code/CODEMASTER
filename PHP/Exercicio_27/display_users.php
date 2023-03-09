<?php

// Inicializa o array com 5 users e as senhas 
$products = [
  ["name" => "Kikas", "pass" => "69"],
  ["name" => "Gil", "pass" => "W33D"],
  ["name" => "Hugo", "pass" => "3.50"],
  ["name" => "Jorge", "pass" => "4.99"],
  ["name" => "Daniel", "pass" => "5.50KDI"]
];

// Inicializa a variável $check como false
$check = false;

// Busca o nome e a senhas 
$name = $_POST['name'];
$pass = $_POST['pass'];

// Verifica os inputs "loop" do array
foreach ($products as $product) {
  // Verfifica se o array na posicao nome e igual a variavel $nome
  // e se a pass e igual a variavel $pass
  if ($product['name'] == $name && $product['pass'] == $pass) {
    // Se os dados estiverem certos, altera a variável $check para true
    $check = true;
    break;
  }
}

// Verifica se a variável $check é true
if ($check) {
  // Se for true, exibe a mensagem de login bem-sucedido
  echo "Welcome to Tijuana, Tequila sexo y marihuana! <br>";
  echo "Eh Eh Eh Eh ! ";
} else {
  // Se for false, exibe a mensagem de login inválido e um link para retornar à página de login
  echo "Where's your god now ?. Please try again. <br>";
  echo '<a href="index.php">Return to login</a>';
}
