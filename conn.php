<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "schoolsystem";

// Correct function: mysqli_connect
$conn = mysqli_connect($server, $name, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
