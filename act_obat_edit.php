<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $jenis_obat = $_POST['jenis_obat'];
    $nama_obat = $_POST['nama_obat'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $id = $_GET['id'];

    var_dump($nama_obat);
    $sql = 
    // "UPDATE `obat` SET `id_jenis` = '$jenis_obat `id_golongan` = '$merk', `nama_obat` = '$nama_obat', `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual', `stok` = '$stok' WHERE `obat`.`id_obat` = '$id';";
    "UPDATE `obat` SET `id_jenis` = '$jenis_obat', `id_golongan` = '$merk', `nama_obat` = '$nama_obat', `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual', `stok` = '$stok' WHERE `obat`.`id_obat` = '$id';";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: obat.php');
        } else {
            var_dump($a);
        }
    ?>