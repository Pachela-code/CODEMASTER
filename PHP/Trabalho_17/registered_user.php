<?php

$users = [
  [
    'username' => 'user1',
    'password' => 'pass1',
    'name' => 'Carlos Pereira',
    'age' => 25,
    'weight' => 75,
    'height' => 180
  ],
  [
    'username' => 'user2',
    'password' => 'pass2',
    'name' => 'Juliana Soares',
    'age' => 30,
    'weight' => 65,
    'height' => 160
  ],

  [
    'username' => 'user3',
    'password' => 'pass4',
    'name' => 'Hugo Fernandes',
    'age' => 13,
    'weight' => 48,
    'height' => 160
  ],



];

$form = (!empty($_POST["username"]) && !empty($_POST["password"]));

if ($form) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $isValid = false;
  $userData = [];

  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      $isValid = true;
      $userData = $user;
      break;
    }
  }

  if ($isValid) {

    //Check age
    if ($userData['age'] <= 13) {
      echo "<p>The results of this calculation may not be accurate for your age. It is recommended that you consult a professional for your dietary needs.</p>";
      echo "<br><a href='index.php'>Go back</a>";
      exit;
    }


    $idealWeight = 22 * number_format(pow($userData['height'] / 100, 2), 2);


    $bmi = $userData['weight'] / number_format(pow($userData['height'] / 100, 2), 2);


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
  }

?>




  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Trabalho_17/CSS/styles.css">
    <title>Registered Users</title>
  </head>

  <body>
    <div class="container">
      <?php
      if ($isValid) {
      ?>
        <h1>Hello <?php echo $userData['name']; ?>!</h1>
        <br>
        <p>Your height is <?php echo $userData['height']; ?> cm. Your ideal weight should be <?php echo $idealWeight; ?> kg.</p>
        <p>Your current weight is <?php echo $userData['weight']; ?> kg. Your BMI is <?php echo number_format($bmi, 2); ?>,
          which is classified as <?php echo $classification; ?>.</p>
        <img src="..//Trabalho_17/Images/tabela.jpg" alt="BMI Chart">
        <a href="index.php" class="exit-button">Exit</a>
      <?php
      } else {
      ?>
        <h1>Invalid Login</h1>
        <p>The username and password you entered do not match any of our records. Please try again.</p>
        <a href="index.php" class="exit-button">Try Again</a>
      <?php
      }
      ?>
    </div>
  </body>

  </html>

  </html>
<?php

} else {
  echo "Error: Invalid username or password. Please try again.";
  echo "<br><a href='index.php'>Go back</a>";
}

?>