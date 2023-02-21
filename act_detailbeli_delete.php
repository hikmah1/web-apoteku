<?php
    include "koneksi.php";
    $query = "delete from detailbeli where id_beli= ".$_GET['id_beli'];
    $output = $koneksi->query($query);
    header('location: detailbeli.php');
?>