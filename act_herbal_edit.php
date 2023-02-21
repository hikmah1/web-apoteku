<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $id_jenis = $_POST['id_jenis'];
    $nama_herbal = $_POST['nama_herbal'];
    // $harga_beli = $_POST['harga_beli'];
    // $harga_jual = $_POST['harga_jual'];
    // $stok = $_POST['stok'];
    $id = $_GET['id'];

    var_dump($nama_herbal);
    $sql = 
    // "UPDATE `herbal` SET `id_jenis` = '$jenis_herbal `id_golongan` = '$merk', `nama_herbal` = '$nama_herbal', `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual', `stok` = '$stok' WHERE `herbal`.`id_herbal` = '$id';";
    "UPDATE `herbal` SET `id_jenis` = '$id_jenis', `nama_herbal` = '$nama_herbal' WHERE `herbal`.`id_herbal` = '$id';";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: herbal.php');
        } else {
            var_dump($a);
        }
    ?>