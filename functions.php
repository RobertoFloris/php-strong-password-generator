<?php
function randomPassword($lengthPass) {
  $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.?/";
  $pass = "";
  for ($i = 0; $i < $lengthPass; $i++) {
      $n = rand(0, strlen($alphabet) - 1); 
      $pass .= $alphabet[$n]; 
  }
  return $pass;
}
?>