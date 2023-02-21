<?php
    include "koneksi.php";
    $nama_alatkesehatan = $_POST['nama_alatkesehatan'];
    $merk_alatkesehatan = $_POST['merk_alatkesehatan'];
    $stok = $_POST['stok'];
    $id = $_GET['id'];

    var_dump($nama_alatkesehatan);
    $sql = 
    "UPDATE `alatkesehatan` SET `nama_alatkesehatan` = '$nama_alatkesehatan', `merk_alatkesehatan` = '$merk_alatkesehatan', `stok` = '$stok' WHERE `alatkesehatan`.`id_alatkesehatan` = '$id';";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: alatkesehatan.php');
        } else {
            var_dump($a);
        }
    ?>