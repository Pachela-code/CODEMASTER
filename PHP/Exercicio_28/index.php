<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peanut butter</title>
</head>

<body style=" justify-content:center; color:black; text-align:center;background-color:bisque">

  <form method="post" action="list_people.php">
    <label for="name">Name:</label>
    <br>
    <input type="text" name="name" id="name" required="required" autofocus>
    <br>
    <label for="weight">Weight:</label>
    <br>
    <input type="text" name="weight" id="weight" required="required" min="0">
    <br>
    <label for="height">Height:</label>
    <br>
    <input type="text" name="height" id="height" required="required" min="0">
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

</body>

</html>