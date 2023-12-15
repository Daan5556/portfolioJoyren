<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
  $projectIdToDelete = $_GET['id'];

  $sql = "DELETE FROM projects WHERE Title = '$projectIdToDelete'";

  if ($conn->query($sql) === TRUE) {
    header("Location: ?page=projects");
  } else {
    echo "Error deleting project: " . $conn->error;
  }

  $conn->close();
} else {
  echo "Invalid request";
}

