<?php
$servername = "localhost";
$username = "vulnlab";
$password = "vulnlab";
$databasename = "vulnlabs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed");
}

?>