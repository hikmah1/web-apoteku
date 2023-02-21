<?php
    include "koneksi.php";
    $query = "delete from suplemen where id_suplemen= ".$_GET['id_suplemen'];
    $output = $koneksi->query($query);
    header('location: suplemen.php');
?>