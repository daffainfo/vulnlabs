<?php
$servername = "localhost";
$username = "root1";
$password = "root1";
$databasename = "vulnlabs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed");
}

?>