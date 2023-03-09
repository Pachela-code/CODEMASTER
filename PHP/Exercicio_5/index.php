<?php

// Variables

$age = 10;
$name = 'Son Goku';

// Text fields
echo "<h1>=== Age checking ===</h1>";

echo "<h3> Name of the person :"  . $name . "</h3>";
echo "<h3> Age of the person :" . $age . "</h3>";
echo "<hr>";

// Conditional

if ($age <= 11) {
  echo "<marquee> $name. " . $age .  " --> you'r still a child </marquee>";
} elseif ($age < 18) {
  echo "<marquee> $name " . $age .  " --> you'r still a teenager </marquee>";
} elseif ($age < 33) {
  echo "<marquee> $name " . $age .  " --> you'r young adult </marquee>";
} elseif ($age < 60) {
  echo "<marquee> $name "  . $age . " --> You'r a grown ass man/woman </marquee>";
} else {
  echo "<marquee> $name " . $age .  " --> Your a wizard harry! </marquee>";
}
