<?php
    session_start();
    if(isset($_SESSION['login'])){
        header("Location: index admin.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Postest 7</title>
</head>
<body>
    <section>
        <header>
            <h1 class="logo">My Portofolio</h1>
            <input type="checkbox" id="check">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <label for="check" class="bar"></label>
            <img src="light.png" id="icon">
        </header>
        <main>
            <h1>Hi, i'm Syamsir and i'm a Programmer.</h1>
            <h2>This is my Portofolio</h2>
            <a href="#"><button class="btn"> Download CV <i class="fas fa-download"></i></button></a>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>