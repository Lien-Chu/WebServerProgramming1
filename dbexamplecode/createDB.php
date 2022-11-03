<?php
$servername = "localhost";
$username = "vicky"; //Ersätt med ditt eget innanför citationstecknen
$password = "1234"; //Ersätt med ditt eget innanför citationstecknen

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE my2DB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


