<?php
    include "koneksi.php";
    $pembelian = $_POST['pembelian'];
    $resep = $_POST['resep'];
    $payment = $_POST['payment'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];

    var_dump($pembelian);
    $sql = "INSERT INTO `detailbeli`(`id_beli`, `pembelian`, `id_resep`, `id_payment`, `jumlah`, `total`) 
    VALUES (NULL,'$pembelian','$resep','$payment','$jumlah','$total')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: detailbeli.php');
        } else {
            var_dump($a);
        }
    ?>