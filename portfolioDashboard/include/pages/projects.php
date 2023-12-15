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
  while ($row = $result->fetch_assoc()) {
    echo '<div class="projects">';
    echo '<h2>' . $row["Title"] . '</h2>';
    echo '<p>' . $row["Description"] . '</p>';
    echo '<a href="?page=deleteproject&id=' . $row["Title"] . '" onclick="return confirm(\'Are you sure you want to delete this project?\');"><button type="button">Delete Project</button></a>';
    echo '</div>';
  }
}
?>
