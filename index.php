<?php 
if (!empty($_GET["page"])) {
  $page = $_GET["page"];
} else{
  $page="home";
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="Assets/styleIndex.css" />
  </head>
  <body>
    <?php include("include/header.php"); ?>
    <div class="container">
      <?php include("include/pages/".$page.".php");
      ?>
    </div>
  </body>
</html>
