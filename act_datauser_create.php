<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `datauser`(`username`, `nama`, `telepon`, `email`) 
    VALUES ('$username','$nama','$telepon','$email');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: datauser.php');
        } else {
            var_dump($a);
        }
    ?>