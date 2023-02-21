<?php
    include "koneksi.php";
    $query = "delete from golongan where id_golongan= ".$_GET['id_golongan'];
    $output = $koneksi->query($query);
    header('location: golongan.php');
?>