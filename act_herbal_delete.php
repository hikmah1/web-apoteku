<?php
    include "koneksi.php";
    $query = "delete from herbal where id_herbal= ".$_GET['id_herbal'];
    $output = $koneksi->query($query);
    header('location: herbal.php');
?>