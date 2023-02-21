<?php
    include "koneksi.php";
    $nama_jenis = $_POST['nama_jenis'];
    var_dump($nama_jenis);
    $sql = "INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES (NULL, '$nama_jenis');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: jenisobat.php');
        } else {
            var_dump($a);
        }
    ?>