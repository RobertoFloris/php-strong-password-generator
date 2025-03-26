<?php 
require_once "./functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <label for="num">quanti caratteri per la tua password?</label>
    <input type="number" name="num">
    <button>Invia</button>
  </form>

  <?php 
    if (isset($_GET['num']) && $_GET['num'] !== "") { 
      echo "<p> La tua password consigliata di " . $_GET['num'] . " caratteri è: " . randomPassword($_GET['num']) . "</p>";
  }
  ?>

</body>
</html>