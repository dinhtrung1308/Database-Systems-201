<?php
$servername = "localhost";
$username = "id15020366_group9";
$password = "Vuhoanganhkhoi@1104";
$dbname = "id15020366_ass1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>