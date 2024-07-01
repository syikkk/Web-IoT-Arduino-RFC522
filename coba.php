<?php
  include 'config.php';

  session_start();
  error_reporting(0);

  if (isset($_POST["signin"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
  
    $chek_user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  
   
    if (mysqli_num_rows($chek_user) > 0) {
      $row = mysqli_fetch_assoc($chek_user);
      $_SESSION["id"]=$row["id"];
      $_SESSION["username"]=$row["username"];
      $_SESSION["full_name"]=$row["full_name"];
      $_SESSION["email"]=$row["email"];
      $_SESSION["status"]=$row["status"];
      $_SESSION["kamar"]=$row["kamar"];

      if($_SESSION["status"]=$row["status"]==0){
        $_SESSION['status']="admin";
        echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="dashboard/admin.php";</script>';
      } 
      
      elseif($_SESSION["status"]=$row["status"]==1){
        $_SESSION['status']="user";
        echo '<script language="javascript">alert("Anda berhasil Login user!"); document.location="dashboard/user.php";</script>';
      } 
      else {
        echo '<script language="javascript">alert("Login gagal!"); document.location="index.php";</script>';
      }



    } else {
      echo "<script>alert('Login details is incorrect. Please try again.');</script>";
    }
  }



?>