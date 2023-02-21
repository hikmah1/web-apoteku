<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $jenis_herbal = $_POST['jenis_herbal'];
    $nama_herbal = $_POST['nama_herbal'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    var_dump($nama_herbal);
    $sql = "INSERT INTO `herbal`(`id_herbal`, `id_jenis`, `id_golongan`, `nama_herbal`, `harga_beli`, `harga_jual`, `stok`) 
            VALUES (NULL,$jenis_herbal,$merk,'$nama_herbal','$harga_beli','$harga_jual','$stok')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: herbal.php');
        } else {
            var_dump($a);
        }
    ?>