<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $keluhan = $_POST['keluhan'];
    $catatan_resep = $_POST['catatan_resep'];


    $sql = "UPDATE `resep` SET `keluhan`='$keluhan',`catatan_resep`='$catatan_resep' 
    WHERE `resep`.`id_resep` = '$id'";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: resep.php');
        } else {
            var_dump($a);
        }
    ?>