<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $id = $_GET['id'];

    var_dump($nama);
    $sql = 
    "UPDATE `datauser` SET `username` = '$username',  `nama` = '$nama',  `telepon` = '$telepon',  `email` = '$email'  WHERE `datauser`.`id_datauser` = '$id';";

    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: datauser.php');
        } else {
            var_dump($a);
        }
    ?>