<?php
session_start();
require_once("../base_dados.php");
require_once("../funcoes.php");

if (!verificarLogado()) {
  header("Location: ../home.php");
  exit();
}

$login = $_SESSION["login"];
$nome = $_SESSION["nome"];
$data_ultimo_acesso = $_SESSION["data_ultimo_acesso"];

atualizarUltimoAcesso($login);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>

  <!-- CSS BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- CSS LOCAL -->
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="text-center">
  <div class="container">
    <div class="row">
      <div class="col py-4 caixa2">
        <h3>Welcome, <?= $nome ?>!</h3>
        <br>
        <p>Your last access was on <?= $data_ultimo_acesso ?>.</p>
        <p>Today is <?= date("Y-m-d") ?>.</p>
        <a href="../home.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>

  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>