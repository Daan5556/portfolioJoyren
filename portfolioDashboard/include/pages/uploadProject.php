<?php /** @noinspection ALL */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Escape user inputs for security
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  // Insert data into database
  $sql = "INSERT INTO projects (Title, Description) VALUES ('$title', '$description')";

  if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close connection
$conn->close();
?>
