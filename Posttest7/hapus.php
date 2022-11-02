<?php 
session_start();
require 'koneksi.php';
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$sqlShow = mysqli_query($conn, "SELECT * FROM contactme WHERE id = $id");
$hapus_di_direktori = mysqli_fetch_assoc($sqlShow);
unlink("gambarWebsite/".$hapus_di_direktori['gambar']);

$result = mysqli_query($conn, "DELETE FROM contactme WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'crud.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'crud.php';
        </script>
    ";
}
?>