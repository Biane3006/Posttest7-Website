<?php
session_start();
require 'koneksi.php';
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$result = mysqli_query($conn, "SELECT * FROM contactme");
while ($row = mysqli_fetch_assoc($result)) {
    $contactme[] = $row;
}

if (isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $data = mysqli_query($conn, "SELECT * FROM contactme WHERE nama LIKE '%$cari%' OR email LIKE '%$cari%' OR no_hp LIKE '%$cari%' OR project LIKE '%$cari%' OR link_web LIKE '%$cari%' OR gambar LIKE '%$cari%' OR waktu LIKE '%$cari%' OR pesan LIKE '%$cari%'");
    $cek = mysqli_num_rows($data);
 } else {
    $data = mysqli_query($conn, "SELECT * FROM contactme ORDER BY id ASC");
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="cari.css">
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


        <main class="crudmain">
            <h1>Data Pesan</h1>
            <button><a href="tambah.php">Tambah Data</a></button>
            <form action="" method="POST">
                <input  class="search"type="text" name="keyword" id="live-search" placeholder="Cari" autocomplete="off">
                <button type="submit" name="cari" id="keyword" class="button">Cari</button>
            </form>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email Pengirim</th>
                    <th>Nomor Telepon</th>
                    <th>Nama Proyek</th>
                    <th>Link Website</th>
                    <th>Gambar</th>
                    <th>Waktu Upload</th>
                    <th>Pesan</th>
                    <th>Hapus / Edit</th>
                </tr>

                <?php 
                    include 'koneksi.php';
                    $no = 1;
                    while($cm = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $cm["nama"]; ?></td>
                            <td><?php echo $cm["email"]; ?></td>
                            <td><?php echo $cm["no_hp"]; ?></td>
                            <td><?php echo $cm["project"]; ?></td>
                            <td><?php echo $cm["link_web"]; ?></td>
                            <td><?php echo $cm["gambar"] ?></td>
                            <td><?php echo $cm["waktu"] ?></td>
                            <td><?php echo $cm["pesan"]; ?></td>
                            <td><a href="edit.php?id=<?php echo $cm["id"]; ?>">Edit</a>
                            |   <a href="hapus.php?id=<?php echo $cm["id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">Hapus</a></td>
                        </tr>
                        <?php
                    }
                    ?>
            </table>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
    <script type="text/javascript" src="scripts.js"></script>
</body>

</html>