<?php
    include "koneksi.php";
    $query = "delete from obat where id_obat= ".$_GET['id_obat'];
    $output = $koneksi->query($query);
    header('location: obat.php');
?>