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
  while ($row = $result->fetch_assoc()) {
    echo '<div class="projects">';
    echo '<h2>' . $row["Name"] . '</h2>';
    echo '<p>' . $row["Mail"] . '</p>';
    echo '<p>' . $row["Message"] . '</p>';
    echo '</div>';

  }
} else {
  echo "0 results";
}
?>
