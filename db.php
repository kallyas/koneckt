<?php
$servername   = "localhost";
$database = "jacaresi_koneckt";
$username = "jacaresi_koneckt";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>
