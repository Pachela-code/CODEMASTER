<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="error_check.php" method="post">
    <input type="text" name="nome" placeholder="Name*" required="required">
    <br><br>
    <input type="number" name="preco" placeholder="Price*" required="required" step="0.01">
    <br><br>
    <input type="text" name="quantidade" placeholder="Quantity*" required="required" step="0.01">
    <br><br>
    <input type="submit" name="submit" value="ADD">
  </form>

</body>

</html>