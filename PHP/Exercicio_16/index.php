<?php

$nome = "";
$extra = "";

$form = isset($_GET["nome"]) && isset($_GET["extra"]);

if ($form) {
  $nome = $_GET["nome"];
  $extra = $_GET["extra"];
}

/*
$x;
if($extra == "cebola"){
    $x = 5;
}
else{
    $x = 0;
}
*/

$x = ($extra == "cebola") ? 5 : 0;
echo $x;

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>
</head>

<body>

  <form>

    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?= $nome; ?>">

    <br><br>

    <label for="extra">Extra: </label>
    <select name="extra">
      <option value="carne" <?php ($extra == "carne") ? "selected" : ""; ?>>Carne</option>
      <option value="queijo" <?php if ($extra == "queijo") {
                                echo "selected";
                              } ?>>Queijo</option>
      <option value="cebola" <?php if ($extra == "cebola") {
                                echo "selected";
                              } ?>>Cebola</option>
    </select>

    <!--
        <label for="extra">Carne extra: </label>
        <input type="radio" name="extra" value="carne">
        <br>
        <label for="extra">Queijo extra: </label>
        <input type="radio" name="extra" value="queijo">
        <br>
        <label for="extra">Cebola extra: </label>
        <input type="radio" name="extra" value="cebola">
        -->

    <br><br>

    <input type="submit" value="Enviar">


  </form>

  <br><br>

  <?php if ($form) : ?>
    <div>
      Nome da pessoa: (<?= $nome; ?>)
      <br>
      Comida extra: (<?= $extra; ?>)
    </div>
  <?php endif; ?>

</body>

</html>