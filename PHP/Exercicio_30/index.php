<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fabricio Repair Shop</title>
</head>

<body>

  <form style="background-color: #FFF8DC;" method="post" action="process-repair.php">
    <label for="name">Customer:</label>
    <br>
    <input type="text" id="name" name="name" required="required">
    <br>
    <label for="mechanic">Mechanic:</label><br>
    <input type="text" id="mechanic" name="mechanic" required="required">
    <br>
    <label for="vehicle">Vehicle:</label>
    <br>
    <input type="text" id="vehicle" name="vehicle" required="required">
    <br>
    <label for="description">Description of Repair:</label>
    <br>
    <textarea id="description" name="description" required="required" placeholder="Please write the problem"></textarea>
    <br>
    <label for="date">Date of Repair:</label>
    <br>
    <input type="date" id="date" name="date">
    <br>
    <label for="time">Time of Repair:</label>
    <br>
    <input type="time" id="time" name="time">
    <br><br>
    <input type="submit" value="Submit">
  </form>


</body>

</html>