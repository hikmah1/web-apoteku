<?php
    include "koneksi.php";
    $metode = $_POST['metode'];
    $id = $_GET['id'];

    var_dump($metode);
    $sql = 
    "UPDATE `payment` SET `metode` = '$metode' WHERE `payment`.`id_payment` = '$id';";

    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: payment.php');
        } else {
            var_dump($a);
        }
    ?>