<?php
require_once("base_dados.php");

$name = $_POST["name"];
$password = $_POST["password"];

$db = new mysqli("host", "username", "password", "trabalho_br");
$result = $db->query("SELECT * FROM users WHERE name = '$name' AND password = '$password'");
if ($result->num_rows > 0) {
    header("location: home.php");
} else {
    header("location: index.php?failed=1");
}
