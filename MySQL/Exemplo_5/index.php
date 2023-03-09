<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..//Exemplo_5/CSS/style.css">
  <title>The Walls are Melting</title>

</head>

<body>

  <form action="submit-form.php" method="post">
    <label for="min_price">Minimum Price:</label>
    <input type="number" id="min_price" name="min_price" required="required">
    <br><br>
    <label for="max_price">Maximum Price:</label>
    <input type="number" id="max_price" name="max_price" required="required">
    <br><br>
    <label for="order">Order by:</label>
    <select id="order" name="order">
      <option value="ASC">Ascending</option>
      <option value="DESC">Descending</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Search">
  </form>
</body>

</html>