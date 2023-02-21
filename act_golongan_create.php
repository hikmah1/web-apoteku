<?php
    include "koneksi.php";
    $nama_golongan = $_POST['nama_golongan'];
    var_dump($nama_golongan);
    $sql = "INSERT INTO `golongan` (`id_golongan`, `nama_golongan`) VALUES (NULL, '$nama_golongan');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: golongan.php');
        } else {
            var_dump($a);
        }
    ?>