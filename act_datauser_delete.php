<?php
    include "koneksi.php";
    $query = "delete from datauser where username= ".$_GET['username'];
    $output = $koneksi->query($query);
    header('location: datauser.php');
?>