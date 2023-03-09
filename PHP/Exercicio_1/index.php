<?php

// Declare variables

$x = 12;
$double = 1.123;
$string = " Testing String";
$boolean = true;
$int = 3;

// VAR_DUMP is used to print the variable
// Changing background
echo '<body style="background-color:black">';

var_dump($x);
echo "<br>"; //
var_dump($double);
echo "<br>"; //
var_dump($string);
echo "<br>"; //
var_dump($boolean);
echo "<br>"; //
var_dump($int);


// CONST is used to print the constant

define("ONE",     "first thing");
echo "<h1 style='color:white';>" . ONE . "</h1>";

// . is used to put stuff together

echo "<h1 style='color: blue; text-align: center'>$x</h1>";
echo "<h1 style='color: red; text-align: center'>$double</h1>";
echo "<h1 style='color: purple; text-align: center'>$string</h1>";
echo "<h1 style='color: pink; text-align: center'>$int</h1>";
echo "</body>";
// Everything is done manually.. get the wheel jesus.. :x
