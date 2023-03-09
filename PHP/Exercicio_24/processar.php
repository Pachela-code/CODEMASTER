<?php

// Check if the "nomes" variable has been set in the $_POST array
if (isset($_POST['nomes'])) {
  // Retrieve the input from the form
  $names = $_POST['nomes'];

  // Split the input into an array of names
  $names_array = explode("\n", $names);

  // Loop through the array of names and print each name along with its position in the array
  foreach ($names_array as $i => $name) {
    echo "Nome " . ($i + 1) . ": " . $name . "<br>";
  }
}
