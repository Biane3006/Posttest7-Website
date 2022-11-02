<?php
  session_start();
  require 'koneksi.php';
  if(isset($_SESSION['login'])){
      header("Location: index admin.php");
      exit;
  }
  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword){
      $password = password_hash($password,PASSWORD_DEFAULT);
      $result = mysqli_query($conn,"SELECT username from akun WHERE username = '$username'");

      if(mysqli_fetch_assoc($result)){
        echo "
          <script>
            alert('Username Telah Digunakan!!!');
            document.location.href = 'register.php';
          </script>
        ";
      }else {
        $sql = "INSERT INTO akun VALUES('', '$username', '$password')";
        $result = mysqli_query($conn,$sql);
        if (mysqli_affected_rows($conn) > 0){
          echo"
            <script>
              alert('Registrasi Telah Berhasil');
              document.location.href = 'login.php';
            </script>
          ";
        }else{
          echo "
            <script>
              alert('Registrasi Gagal Dilakukan!!!');
              document.location.href = 'register.php';
            </script>
          ";
        }
      }

    }else{
      echo "
        <script>
          alert('Konfirmasi Anda Tidak Sesuai');
          document.location.href = 'register.php';
        </script>
      ";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
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
        <div class="txt_field">
            <input type="password" name="cpassword" id="cpassword" required>
            <span></span>
            <label>Konfirmasi Password</label>
        </div>
        <input type="submit" name="register" id="register">
        <div class="signup_link">
          Sudah Punya Akun? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
