<?php
session_start();
    include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>   <?php echo $_SESSION["username"]; ?>  </h3>
  <h3> <?php  echo $_SESSION["full_name"]; ?></h3>
  <h3> <?php  echo $_SESSION["email"]; ?></h3>  
  <h3> <?php   echo $_SESSION["kamar"];  ?></h3>
   
  
  
</body>
</html>