<?php
    include "koneksi.php";
    $nama_golongan = $_POST['nama_golongan'];
    $id = $_GET['id'];

    var_dump($nama_golongan);
    $sql = 
    "UPDATE `golongan` SET `nama_golongan` = '$nama_golongan' WHERE `golongan`.`id_golongan` = '$id';";

    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: golongan.php');
        } else {
            var_dump($a);
        }
    ?>