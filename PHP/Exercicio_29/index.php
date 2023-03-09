<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>

  <style>
    body {
      background: linear-gradient(to bottom, #ccffff, #ffcccc);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form,
    table {
      margin: auto;
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="sent.php" method="post">
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="age" placeholder="age"><br>
    <input type="text" name="height" placeholder="height"><br>
    <br>
    <select name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="pidgeon">Pidgeon</option>
      <option value="potato">Potato</option>
    </select>
    <br><br>
    <input type="submit" value="Sent">
  </form>
</body>

</html>