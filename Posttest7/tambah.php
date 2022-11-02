<?php
    session_start();
    require "koneksi.php";
    include 'koneksi.php';
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
  }
    if(isset($_POST['tambah'])){
        $nama = htmlspecialchars($_POST["name"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $telpon = htmlspecialchars($_POST["telpon"]);
        $project = htmlspecialchars($_POST["project"]);
        $web = htmlspecialchars($_POST["link"]);
        $gambar = $_FILES['gambar']['name'];
        $nama_gambar = $_POST['nama_gambar'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama_gambar.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];
        date_default_timezone_set("Asia/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $pesan = htmlspecialchars($_POST["message"]);

        if(move_uploaded_file($tmp, 'gambarWebsite/'.$gambar_baru)){
            $sql = "INSERT INTO contactme VALUES('','$nama', '$mail', '$telpon', '$project', '$web','$gambar_baru','$waktu', '$pesan')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo "
                    <script>
                        alert('Data Telah Ditambah');
                        document.location.href = 'crud.php';
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert('Data Gagal Ditambah');
                        document.location.href = 'crud.php';
                    </script>
                ";
            }
        }
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
            <section class="contact" id="contact">

                <h1 class="heading"> <span>contact</span> me </h1>

                <div class="row">

                    <div class="content">

                        <h3 class="title">contact info</h3>

                        <div class="info">
                            <h3> <i class="fas fa-envelope"></i> sarulaja300603@gmail.com </h3>
                            <h3> <i class="fas fa-phone"></i> +62-813-4863-6983 </h3>
                            <h3> <i class="fas fa-map-marker-alt"></i> Samarinda, Kalimantan Timur </h3>
                        </div>

                    </div>

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Nama" class="box" required>
                        <input type="email" name="mail" placeholder="E-Mail" class="box" required>
                        <input type="tel" name="telpon" placeholder="Telp : 0000-0000-0000" class="box" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                        <input type="text" name="project" placeholder="Nama Project" class="box" required>
                        <input type="url" name="link" placeholder="Contoh Website (Link)" class="box" required><br>
                        <label for="">Gambar Website : </label>
                        <input type="file" name="gambar" accept="image/" required>
                        <input type="text" name="nama_gambar" placeholder="Nama Gambar" class="box" required>
                        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="Pesan" required></textarea><br>
                        <button type="submit" class="btn" name="tambah"> Tambah Data </button>
                    </form>

                </div>
            </section>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>