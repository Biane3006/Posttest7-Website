<?php
  session_start();
  require 'koneksi.php';
  if(isset($_SESSION['login'])){
    header("Location: index admin.php");
    exit;
  }
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username'");
    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row['password'])){
        $_SESSION['login'] = true;
        header("Location: index admin.php");
        exit;
      }
    }else{
      echo"
        <script>
          alert('Login Gagal Dilakukan');
          document.location.href = 'login.php';
        </script>
      ";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>My Portofolio</h1>
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" name="username" id="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="login" id="login">
        <div class="signup_link">
          Belum Punya Akun? <a href="register.php">Register</a>
        </div>
      </form>
    </div>

  </body>
</html>
