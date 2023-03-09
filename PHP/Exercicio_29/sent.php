<html>

<head>
  <style>
    body {
      background: linear-gradient(to bottom, #ccffff, #ffcccc);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    table {
      margin: auto;
      text-align: center;
    }
  </style>
</head>

<body>

  <?php
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $gender = $_POST['gender'];

    $people = [
      ["name" => "Joana", "age" => 18, "height" => 160, "gender" => "female"],
      ["name" => "Bob", "age" => 42, "height" => 185, "gender" => "male"],
      ["name" => "Carlos", "age" => 31, "height" => 178, "gender" => "male"],
      ["name" => "Luisa", "age" => 29, "height" => 165, "gender" => "female"],
      ["name" => "Catarina", "age" => 38, "height" => 155, "gender" => "female"],
      ["name" => $name, "age" => $age, "height" => $height, "gender" => $gender]
    ];
  ?>
    <table border="1">
      <tr>
        <th>Position</th>
        <th>Name</th>
        <th>Age</th>
        <th>Height</th>
        <th>Gender</th>
      </tr>

      <?php
      for ($i = 0; $i < count($people); $i++) {
      ?>
        <tr>
          <td><?php echo ($i + 1); ?></td>
          <td><?php echo $people[$i]["name"]; ?></td>
          <td><?php echo $people[$i]["age"]; ?></td>
          <td><?php echo $people[$i]["height"]; ?></td>
          <td><?php echo $people[$i]["gender"]; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  <?php
  }
  ?>
</body>

</html>