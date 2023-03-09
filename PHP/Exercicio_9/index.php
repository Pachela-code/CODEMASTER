<!--- PHP RELATED --->

<?php



?>



<!-- HTML CONTENT -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Temperature Converter</title>
</head>


<body>
  <h1>Temperature Converter</h1>

  <?php
  // Get the current temperature in Fahrenheit
  $temperature_f = 70;

  // Convert the temperature to Celsius
  $temperature_c = ($temperature_f - 32) / 1.8;

  // Convert the temperature to Kelvin
  $temperature_k = $temperature_c + 273.15;

  // Format the temperatures with 3 decimal places
  $temperature_f_formatted = number_format($temperature_f, 2);
  $temperature_c_formatted = number_format($temperature_c, 2);
  $temperature_k_formatted = number_format($temperature_k, 2);

  // Output the temperature in all scales
  echo "<p>The current temperature is $temperature_f_formatted degrees Fahrenheit, 
  which is $temperature_c_formatted degrees Celsius, 
  or $temperature_k_formatted degrees Kelvin.</p>";
  ?>

</body>

</html>