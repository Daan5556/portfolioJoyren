<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Loop through data and display it
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["Name"] . " - Name: " . $row["Mail"] . "<br>";
    // Add more fields as needed
  }
} else {
  echo "0 results";
}
?>
