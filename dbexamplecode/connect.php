<?php
$servername = "localhost";
$username = "vicky"; //Ersätt med ditt eget innanför citationstecknen
$password = "1234"; //Ersätt med ditt eget innanför citationstecknen

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
/*The object operator, ->, is used in object scope to access methods 
and properties of an object. It’s meaning is to say that what is on 
the right of the operator is a member of the object instantiated into 
the variable on the left side of the operator. Instantiated is the key 
term here.*/
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

