<?php /** @noinspection ALL */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Function to get the visitor's IP address
function getVisitorIp() {
  $ip = $_SERVER['REMOTE_ADDR'];
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  return $ip;
}

// Insert visitor information into the database
$ip_address = getVisitorIp();
$insert_query = "INSERT INTO visitors (ip_address) VALUES ('$ip_address')";

if ($conn->query($insert_query) === TRUE) {
} else {
  echo "Error: " . $insert_query . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
