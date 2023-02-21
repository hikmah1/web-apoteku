<?php
    include "koneksi.php";
    $merk = $_POST['merk'];
    $jenis_obat = $_POST['jenis_obat'];
    $nama_obat = $_POST['nama_obat'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    var_dump($nama_obat);
    $sql = "INSERT INTO `obat`(`id_obat`, `id_jenis`, `id_golongan`, `nama_obat`, `harga_beli`, `harga_jual`, `stok`) 
            VALUES (NULL,$jenis_obat,$merk,'$nama_obat','$harga_beli','$harga_jual','$stok')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: obat.php');
        } else {
            var_dump($a);
        }
    ?>