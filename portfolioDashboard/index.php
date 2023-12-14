<?php
if (!empty($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = "home";
}
?>
<!doctype html>
<html lang="en">
<head>
  <?php include("include/head.php"); ?>
</head>
<body>
<header>
  <h1>Joyren's Website Manager 2000</h1>
</header>
<main>
  <nav>
    <ul>
      <li><a href="?page=home"><i class="fa-solid fa-house"></i></a></li>
      <li><a href="?page=upload"><i class="fa-solid fa-upload"></i></a></li>
      <li><a href="?page=projects"><i class="fa-solid fa-diagram-project"></i></a></li>
      <li><a href="?page=mail"><i class="fa-solid fa-envelope"></i></a></li>
    </ul>
  </nav>
  <div class="container">
    <?php include("include/pages/" . $page . ".php"); ?>
  </div>
</main>
</body>
</html>
