<?php

include 'config.php';



if (isset($_POST["signup"])) {
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $username = mysqli_real_escape_string($conn, $_POST["signup_username"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
  

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM users WHERE username='$username'"));

  if ($password !== $cpassword) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already exists in out database.');</script>";
  } else {
    $sql = "INSERT INTO users (id, full_name, username, email, password, cpassword, status) VALUES ('$id','$full_name', '$username', '$email', '$password','$cpassword' ,'1')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["id"] = "";
      $_POST["signup_full_name"] = "";
      $_POST["signup_username"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";

      $to = $email;
      $subject = "Email verification";

      $message = "
      <html>
      
      </html>
      ";

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      

     
    } else {
      echo "<script>alert('User registration failed.');</script>";
    }
  }
}
?>