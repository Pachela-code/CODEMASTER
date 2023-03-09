<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Walls are Melting</title>
</head>

<body>
  <h1>Check Database</h1>
  <form action="submit-form.php" method="post">
    <label for="search_by">Search by:</label>

    <select id="search_by" name="search_by">

      <option value="id">ID</option>
      <option value="nome">Name</option>
      <option value="preco">Price</option>
      <option value="quantidade">Quantity</option>

    </select>
    <br><br>

    <label for="order">Order:</label><br>
    <input type="radio" id="ascending" name="order" value="ascending">
    <label for="ascending">Ascending</label><br>
    <input type="radio" id="descending" name="order" value="descending">
    <label for="descending">Descending</label>
    <br><br>
    <input type="submit" name="submit" value="Search">
  </form>

</body>

</html>