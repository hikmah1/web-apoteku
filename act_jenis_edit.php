<?php
    include "koneksi.php";
    $nama_jenis = $_POST['nama_jenis'];
    $id = $_GET['id'];

    var_dump($nama_jenis);
    $sql = 
    "UPDATE `jenis` SET `nama_jenis` = '$nama_jenis' WHERE `jenis`.`id_jenis` = '$id';";

    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: jenisobat.php');
        } else {
            var_dump($a);
        }
    ?>