<?php
$servername = "smart-do-user-13132292-0.b.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS_-CCn4acbduJxTH5ez_E";
$dbname = "smartintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
