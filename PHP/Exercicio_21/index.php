<?php

$lista_nomes = [];

$form = isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"]);

if ($form) {
  $lista_nomes[] = $_GET["n1"];
  $lista_nomes[] = $_GET["n2"];
  $lista_nomes[] = $_GET["n3"];

  //array_push($lista_nomes, $_GET["n1"], $_GET["n2"], $_GET["n3"]);
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-black text-warning">

  <div class="container">

    <div class="row">
      <div class="col text-center">
        <div class="h1">Arrays</div>
      </div>
    </div>

    <div class="row">
      <div class="col-5 bg-secondary mx-auto rounded">
        <form class="text-center">
          <input type="text" name="qnt" required="required" placeholder="qnt" class="my-2">
          <br>
          <input type="submit" value="Salvar" class="my-2">
        </form>
      </div>
    </div>

    <div class="row mt-4">

      <div class="col text-center">
        <a href="index.php">
          <button>Reset</button>
        </a>
      </div>

    </div>

    <?php if ($form) : ?>

      <div class="row mt-4">
        <div class="col text-center">
          <p>1 - <?= $lista_nomes[0]; ?></p>
          <p>2 - <?= $lista_nomes[1]; ?></p>
          <p>3 - <?= $lista_nomes[2]; ?></p>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col text-center">
          <p><?php print_r($lista_nomes); ?></p>
        </div>
      </div>

    <?php endif; ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>