<?php /** @noinspection ALL */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT MAX(id) AS highest_index FROM visitors;
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$highestIndex = $row['highest_index'];
?>

<div class="project">
  <h2>Welcome</h2>
  <p>Total Visitors: <em> <?php echo $highestIndex ?> </em></p>
</div>