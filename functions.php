<?php 
 $pass = ""; 
 if(isset($_GET['num'])){

   $alphabetLowers = "abcdefghijklmnopqrstuvwxyz";
   $alphabetUppers= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $numbers = "0123456789";
   $symbol = "!@#$%^&*()-_=+[]{};:,.?/";

   $alphabet= "";

   if(isset($_GET['lower']) && isset($_GET['lower']) == "on"){
    $alphabet .= $alphabetLowers;
   }

   if(isset($_GET['upper']) && isset($_GET['upper']) == "on"){
    $alphabet .= $alphabetUppers;
   }

   if(isset($_GET['number']) && isset($_GET['number']) == "on"){
    $alphabet .= $numbers;
   }

   if(isset($_GET['symbol']) && isset($_GET['symbol']) == "on"){
    $alphabet .= $symbol;
   }

   for ($i = 0; $i < $_GET['num']; $i++) {
       $n = rand(0, strlen($alphabet) - 1); 
       $pass .= $alphabet[$n]; 
   }
 }
?>