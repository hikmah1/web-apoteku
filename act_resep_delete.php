<?php
    include "koneksi.php";
    $query = "delete from resep where id_resep= ".$_GET['id_resep'];
    $output = $koneksi->query($query);
    header('location: resep.php');
?>