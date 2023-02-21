<?php
    include "koneksi.php";
    $keluhan = $_POST['keluhan'];
    $catatan_resep = $_POST['catatan_resep'];

    var_dump($keluhan);
    $sql = "INSERT INTO `resep` (`id_resep`, `keluhan`, `catatan_resep`) 
    VALUES (NULL, '$keluhan', '$catatan_resep');";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: resep.php');
        } else {
            var_dump($a);
        }
    ?>