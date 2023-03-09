<?php
$form = isset($_POST["age"]) && isset($_POST["weight"]) && isset($_POST["height"]);

if ($form) {
  $age = $_POST['age'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];

  if ($age <= 13) {
    echo "<p>The results of this calculation may not be accurate for your age. It is recommended that you consult a professional for your dietary needs.</p>";
    echo "<br><a href='index.php'>Go back</a>";
    exit;
  }

  $idealWeight = 22 * pow($height / 100, 2);
  $bmi = $weight / pow($height / 100, 2);
  $classification = "";

  if ($bmi < 18.5) {
    $classification = "Underweight";
  } elseif ($bmi >= 18.5 && $bmi < 25) {
    $classification = "Normal weight";
  } elseif ($bmi >= 25 && $bmi < 30) {
    $classification = "Overweight";
  } elseif ($bmi >= 30) {
    $classification = "Obesity";
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Trabalho_17/CSS/styles.css">
    <title>Visitor</title>
  </head>

  <body>
    <h1>Welcome Visitor!</h1>
    <br>
    <p>Your height is <?php echo $height; ?> cm. Your ideal weight should be <?php echo $idealWeight; ?> kg.</p>
    <p>Your current weight is <?php echo $weight; ?> kg. Your BMI is <?php echo number_format($bmi, 2); ?>, which is classified as <?php echo $classification; ?>.</p>
    <br><br>
    <img src="..//Trabalho_17/Images/tabela.jpg" alt="BMI Chart">

  </body>

  </html>

<?php
} else {
  echo "Error: Form not submitted. Please try again.";
}
?>