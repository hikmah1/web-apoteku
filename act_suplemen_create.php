<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $jenis_suplemen = $_POST['jenis_suplemen'];
    $nama_suplemen = $_POST['nama_suplemen'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    var_dump($nama_suplemen);
    $sql = "INSERT INTO `suplemen`(`id_suplemen`, `id_jenis`, `id_golongan`, `nama_suplemen`, `harga_beli`, `harga_jual`, `stok`) 
            VALUES (NULL,$jenis_suplemen,$merk,'$nama_suplemen','$harga_beli','$harga_jual','$stok')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: suplemen.php');
        } else {
            var_dump($a);
        }
    ?>