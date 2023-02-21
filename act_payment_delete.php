<?php
    include "koneksi.php";
    $query = "delete from payment where id_payment= ".$_GET['id_payment'];
    $output = $koneksi->query($query);
    header('location: payment.php');
?>