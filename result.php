<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  echo "<p>" . "La tua password di " . strlen($_SESSION['password']) . " caratteri è: " . $_SESSION['password'] . "</p>"
  ?>
</body>
</html>