<?php
    include "koneksi.php";
    $nama_alatkesehatan = $_POST['nama_alatkesehatan'];
    $merk_alatkesehatan = $_POST['merk_alatkesehatan'];
    $stok = $_POST['stok'];

    var_dump($nama_alatkesehatan);
    $sql = "INSERT INTO `alatkesehatan` (`id_alatkesehatan`, `nama_alatkesehatan`, `merk_alatkesehatan`, `stok`) 
    VALUES (NULL, '$nama_alatkesehatan', '$merk_alatkesehatan', '$stok');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: alatkesehatan.php');
        } else {
            var_dump($a);
        }
    ?>