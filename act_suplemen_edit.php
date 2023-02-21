<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $jenis_suplemen = $_POST['jenis_suplemen'];
    $nama_suplemen = $_POST['nama_suplemen'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $id = $_GET['id'];

    var_dump($nama_suplemen);
    $sql = 
    // "UPDATE `suplemen` SET `id_jenis` = '$jenis_suplemen `id_golongan` = '$golongan', `nama_suplemen` = '$nama_suplemen', `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual', `stok` = '$stok' WHERE `suplemen`.`id_suplemen` = '$id';";
    "UPDATE `suplemen` SET `id_jenis` = '$jenis_suplemen', `id_golongan` = '$merk', `nama_suplemen` = '$nama_suplemen', `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual', `stok` = '$stok' WHERE `suplemen`.`id_suplemen` = '$id';";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: suplemen.php');
        } else {
            var_dump($a);
        }
    ?>