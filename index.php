<?php
 require_once "./functions.php";
 if($pass != ""){
  session_start();

  $_SESSION['password'] = $pass;

  header("Location: ./result.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generatore di Password</title>
</head>
<body>
  <form action="" method="GET">
    <label for="num">Quanti caratteri per la tua password?</label>
    <input type="number" name="num">

    <br>
    <label for="lower">Lettere minuscole?</label>
    <input type="checkbox" name="lower" id="lower">

    <label for="upper">Lettere maiuscole?</label>
    <input type="checkbox" name="upper" id="upper">

    <label for="number">Numeri?</label>
    <input type="checkbox" name="number" id="number">

    <label for="symbol">Simboli?</label>
    <input type="checkbox" name="symbol" id="symbol">

    <br>
    <button type="submit">Invia</button>
  </form>

</body>
</html>
