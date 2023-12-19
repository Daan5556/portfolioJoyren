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
  $title = $_POST['title'];
  $description = $_POST['description'];
  $languages = $_POST['languages'];

  // Insert data into the projects table
  $sql = "INSERT INTO projects (Title, Description) VALUES ('$title', '$description')";

  if ($conn->query($sql) === TRUE) {
    // Retrieve the last inserted project_id
    $project_id = $conn->insert_id;

    // Insert selected languages into the project_languages table
    foreach ($languages as $lang_id) {
      $insertLanguagesQuery = "INSERT INTO project_languages (project_id, lang_id) VALUES ('$project_id', '$lang_id')";

      if ($conn->query($insertLanguagesQuery) !== TRUE) {
        echo "Error: " . $insertLanguagesQuery . "<br>" . $conn->error;
      }
    }

    // Redirect to another page or display a success message
    header("Location: ?page=projects");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close connection
$conn->close();
?>
