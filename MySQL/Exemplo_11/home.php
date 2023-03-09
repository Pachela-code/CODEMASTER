<?php
session_start();
require_once("./base_dados.php");
require_once("./funcoes.php");

if (isset($_POST["submit"])) {
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  $valid = fazerLogin($login, $senha);

  if ($valid) {

    $_SESSION["login"] = $login;
    header("Location: ../Exemplo_11/saida/index.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- CSS BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- CSS LOCAL -->
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="text-center">
  <div class="container">
    <div class="row">
      <div class="col py-4 caixa2">
        <h3>Login</h3>
        <br>
        <form action="" method="post">
          <div class="form-group ">
            <label for="login">Username:</label>
            <input type="text" class="form-control" id="login" name="login" required="required" autofocus>
          </div>
          <div class="form-group">
            <label for="senha">Password:</label>
            <input type="password" class="form-control" id="senha" name="senha" required="required">
          </div>
          <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        </form>
        <?php if (isset($error)) {
          echo "<br>" . $error;
        } ?>
      </div>
    </div>
  </div>

  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>