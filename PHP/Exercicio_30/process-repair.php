<?php

// FUNCTION
require_once "Repair.php";

// ARRAY WITH THE PEOPLE FUN
$repairs = [
  new Repair("Gil Nogueira", "Carlinhos", "Honda Civic", "Changed the oil and oil filter", "2022-01-01", "09:00"),
  new Repair("Tiago Silva", "Sr. Jose", "Ford Focus", "Replaced a flat tire", "2022-01-02", "10:00"),
  new Repair("Rodrigo Soares", "Mestre Arlindo", "Wolkswagen Golf", "Repaired the brakes", "2022-01-03", "11:00"),
  new Repair("Ricardo Frasco", "Bob Potter", "Toyota GT86", "Performed an engine tune-up", "2022-01-04", "12:00"),
];


if (isset($_POST['name'])) {
  $repair = new Repair(
    $_POST['name'],
    $_POST['mechanic'],
    $_POST['vehicle'],
    $_POST['description'],
    $_POST['date'],
    $_POST['time']
  );

  $repairs[] = $repair;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style=" background-image: url('https://www.mastermechanic.ca/blog/wp-content/uploads/2016/10/Inside-1.jpg'); background-size:cover">

  <table style="background-color: #FFF8DC;  ">
    <tr>
      <th style="border: 1px solid black;">Customer</th>
      <th style="border: 1px solid black;">Mechanic</th>
      <th style="border: 1px solid black;">Vehicle</th>
      <th style="border: 1px solid black;">Description</th>
      <th style="border: 1px solid black;">Date</th>
      <th style="border: 1px solid black;">Time</th>
    </tr>
    <?php foreach ($repairs as $repair) : ?>
      <tr>
        <td style="border: 1px solid black;">
          <?php echo $repair->name; ?></td>
        <td style="border: 1px solid black;">
          <?php echo $repair->mechanic; ?></td>
        <td style="border: 1px solid black;">
          <?php echo $repair->vehicle; ?></td>
        <td style="border: 1px solid black;">
          <?php echo $repair->description; ?></td>
        <td style="border: 1px solid black;">
          <?php echo $repair->date; ?></td>
        <td style="border: 1px solid black;">
          <?php echo $repair->time; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>