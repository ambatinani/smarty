<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6585575";
$password = "GleSUUA1YY";
$dbname = "sql6585575";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
