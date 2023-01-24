<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
mysqli_query($conn,"set character set utf8");
?>