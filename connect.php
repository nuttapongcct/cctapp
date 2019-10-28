<?php
$servername = "localhost";
$username = "mike";
$password = "123";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Error Connect to Database");
$strDB = mysqli_select_db($conn, "charoenchai");

$dataS = mysqli_query($conn, "SELECT id, username, password, first, last, department FROM employee");
?>