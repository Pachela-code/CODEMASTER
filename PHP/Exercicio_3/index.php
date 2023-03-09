<?php

date_default_timezone_set("Europe/Lisbon");


/// intval makes the conversion from string to integer

// Local variables
$year = date("Y");
$age = 32;
$rest = intval($year) - $age;



// Textual information


echo "<h1> ===== Year of Birth ==== </h1> <br>";
echo "<h3> Actual year: (" . $year . ") </h3> <br>";
echo "<h3> Age: (" . $age . ") </h3> <br>";
echo "<h3> Rest: (" . $rest . ") </h3> <br>";
