<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Trabalho_17/CSS/styles.css">
  <title>CodeMaster Nutrition</title>
</head>

<body>
  <h4>Welcome</h4>
  <div class="registered-users">
    <form action="registered_user.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username" required="required">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password" required="required">
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <br>
  <br>
  <br>

  <h4>Visitors</h4>
  <div class="visitors">
    <form action="visitors.php" method="post">
      <label for="age">Age:</label>
      <br>
      <input type="number" id="age" name="age" required="required">
      <br>
      <label for="weight">Weight:</label>
      <br>
      <input type="number" id="weight" name="weight" required="required">
      <br>
      <label for="height">Height:</label>
      <br>
      <input type="number" id="height" name="height" step="0.01" required="required">
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>

</html>