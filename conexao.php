<?php   
  $pdo = new PDO("mysql:host=localhost;dbname=crud_teste","root","");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>