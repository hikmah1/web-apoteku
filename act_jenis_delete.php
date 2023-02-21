<?php
    include "koneksi.php";
    $query = "delete from jenis where id_jenis= ".$_GET['id_jenis'];
    $output = $koneksi->query($query);
    header('location: jenisobat.php');
?>