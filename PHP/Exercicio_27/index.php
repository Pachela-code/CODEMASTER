<!DOCTYPE html>
<html>

<head>
  <title>User List</title>
</head>

<body>
  <h1>Potato</h1>
  <form action="display_users.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required="required"><br>
    <label for="pass">Password:</label><br>
    <input type="password" id="pass" name="pass" step="0.01" required="required" min="0">
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>