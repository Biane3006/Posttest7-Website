<?php
  session_start();
  include 'koneksi.php';
  if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About Me</title>
</head>
<body>
    <section>
        <header>
            <h1 class="logo">My Portofolio</h1>
            <input type="checkbox" id="check">
            <ul>
                <li><a href="index admin.php">Home</a></li>
                <li><a href="about admin.php">About Me</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="crud.php">Data Pesan</a></li>
            </ul>
            <label for="check" class="bar"></label>
            <img src="light.png" id="icon">
        </header>
        <main>
            <h1>Nama : Syamsir</h1>
            <h1>NIM  : 2109106090</h1>
            <h1>Kelas: B2'2021</h1>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>