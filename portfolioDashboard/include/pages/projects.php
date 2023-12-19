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
$sqlProjects = "SELECT * FROM projects ORDER BY project_id DESC";
$resultProjects = $conn->query($sqlProjects);

if ($resultProjects->num_rows > 0) {
  while ($rowProjects = $resultProjects->fetch_assoc()) {
    echo '<div class="projects">';
    echo '<h2>' . $rowProjects["title"] . '</h2>';
    echo '<p>' . $rowProjects["description"] . '</p>';
    echo '<div class="footer">';
    echo '<div class="socialIcons">';

    $sqlProjectLan = "SELECT lang_id FROM project_languages WHERE project_id = $rowProjects[project_id]";
    $resultProjectLan = $conn->query($sqlProjectLan);
    while ($rowProjectLanguage = $resultProjectLan->fetch_assoc()) {
      // Access the lang_id values
      $lang_id = $rowProjectLanguage['lang_id'];

      $sqlLang = "SELECT language FROM languages WHERE lang_id = $lang_id";
      $resultLang = $conn->query($sqlLang);
      while ($rowLanguage = $resultLang->fetch_assoc()) {
        $lang = $rowLanguage['language'];
        echo '<i class="fa-brands ' . $lang . '"></i>';

      }
    }

    echo '</div>';

    echo '<a href="?page=deleteproject&id=' . $rowProjects["project_id"] . '" onclick="return confirm(\'Are you sure you want to delete this project?\');"><i class="fa-solid fa-trash"></i></a>';
    echo '</div>';
    echo '</div>';
  }
}
?>
