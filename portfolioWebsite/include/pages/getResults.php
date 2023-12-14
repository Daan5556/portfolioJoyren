<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['message'];

$sql = "INSERT INTO form (name, mail, message) VALUES ('$name', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
  echo "Record added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
