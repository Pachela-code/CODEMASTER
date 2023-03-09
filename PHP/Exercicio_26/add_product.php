<!DOCTYPE html>
<html>

<head>
  <title>Product List</title>
</head>

<body>
  <h1>Product List</h1>
  <form action="display_products.php" method="get">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required="required"><br>
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" step="0.01" required="required" min="0">
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>