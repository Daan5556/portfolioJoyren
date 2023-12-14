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
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Loop through data and display it
  while ($row = $result->fetch_assoc()) {
    echo "Title: " . $row["Title"] . " - Description: " . $row["Description"] . "<br>";
  }
} else {
  echo "0 results";
}
?>
