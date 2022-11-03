<?php
$servername = "localhost";
$username = "vicky"; //Ersätt med ditt eget innanför citationstecknen
$password = "1234"; //Ersätt med ditt eget innanför citationstecknen
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
<body>
  <p><b>Code lines to explain from the example above:</b></p>
  <p>First, we set up an SQL query that selects the id, 
    firstname and lastname columns from the MyGuests table. 
    The next line of code runs the query and puts the resulting data into a variable called $result.</p>
  <p>Then, the function num_rows() checks if there are more than zero rows returned.</p>
  <p>If there are more than zero rows returned, the function fetch_assoc() puts all the results 
    into an associative array that we can loop through. 
    The while() loop loops through the result set and outputs the data from the id, 
    firstname and lastname columns.</p>
</body>
</html>