<?php
    include "koneksi.php";
    $pembelian = $_POST['pembelian'];
    $resep = $_POST['resep'];
    $payment = $_POST['payment'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $id = $_GET['id'];

    var_dump($pembelian);
    $sql = 
    "UPDATE `detailbeli` SET `pembelian`='$pembelian',`id_resep`='$resep',`id_payment`='$payment',`jumlah`='$jumlah',`total`='$total' 
    WHERE  `detailbeli`.`id_beli` = '$id';";
    
    // "UPDATE `detailbeli` SET `pembelian` = '$pembelian', `resep` = '$resep', `payment` = '$payment', `jumlah` = '$jumlah', `total` = '$total' 
    // WHERE `detailbeli`.`id_detailbeli` = '$id';";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: detailbeli.php');
        } else {
            var_dump($a);
        }
    ?>