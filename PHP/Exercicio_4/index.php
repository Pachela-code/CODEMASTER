<?php
$first_temp = 32;
$temp_f = round(($first_temp * 1.8) + 32, 1);
$temp_k = round(($first_temp + 273.15), 1);


echo "<h1>Temperature with PHP</h1>";
echo "<hr>";

echo "<h3> Celsius = " . $first_temp . "ºC </h3>";
echo "<hr>";

echo "<h3> Temperature in Fahrenheit = " . $temp_f . "ºF </h3>";
echo "<h3> Temperature in Celsius = " . $temp_k . "ºK </h3>";
