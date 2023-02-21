<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `datauser` ( `nama`, `username`, `password`, `telepon`, `email`) 
    VALUES ('$nama', '$username', '$password', '$telepon', '$email');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: login.php');
        } else {
            var_dump($a);
        }
    ?>