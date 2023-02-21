<?php
    include "koneksi.php";
    $metode = $_POST['metode'];
    var_dump($metode);
    $sql = "INSERT INTO `payment` (`id_payment`, `metode`) VALUES (NULL, '$metode');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: payment.php');
        } else {
            var_dump($a);
        }
    ?>