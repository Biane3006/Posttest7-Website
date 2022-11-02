<?php
    $conn = mysqli_connect("localhost", "root", "","my_portofolio");

    if(!$conn){
        die("Website Gagal Terhubung Ke Database" . mysqli_connect_error());
    }
?>