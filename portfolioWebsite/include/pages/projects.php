<?php /** @noinspection ALL */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

  <div class="project" onclick="window.location='/?page=projectsPages/assessmentPresentatie'">
    <h2>Assessment Presentation</h2>
    <p>Embarking on the journey of creating a website for an assessment presentation was both a challenge and a delight.
      This project allowed me to blend design finesse with functionality, ensuring a seamless platform for showcasing
      the
      depth of my assessment. From crafting an intuitive user interface to incorporating interactive elements, every
      detail was meticulously considered to enhance the overall presentation experience. Dive into the digital realm
      where
      information meets innovation, as this project reflects not only my technical skills but also my commitment to
      delivering impactful content in a visually engaging way</p>
    <div class="iconSkills">
      <i class="fa-brands fa-html5"></i>
      <i class="fa-brands fa-css3-alt"></i>
      <i class="fa-brands fa-js"></i>
    </div>
  </div>
  <div class="project" onclick="window.location='/?page=projectsPages/maatwerk'">
    <h2>"Maatwerk" presentation</h2>
    <p>Crafting a bespoke digital space for my 'Maatwerk' presentation was a journey of personalization and precision.
      'Maatwerk,' meaning tailor-made in Dutch, perfectly encapsulates the essence of this project. From custom design
      elements to curated content, every aspect of the website is meticulously tailored to showcase the unique facets of
      my work. Step into a virtual atelier where creativity meets functionality, as this presentation reflects not only
      the tailored approach to my projects but also my commitment to creating a distinct and memorable online
      experience.
      Explore the artistry of 'Maatwerk' and discover how personalized design elevates the storytelling of my
      professional
      journey</p>
    <div class="iconSkills">
      <i class="fa-brands fa-html5"></i>
      <i class="fa-brands fa-css3-alt"></i>
      <i class="fa-brands fa-js"></i>
    </div>
  </div>

<?php
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '<div class="project">';
    echo '<h2>' . $row["Title"] . '</h2>';
    echo '<p>' . $row["Description"] . '</p>';
    echo '</div>';
  }
}
?>