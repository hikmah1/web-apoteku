<?php
    include "koneksi.php";
    $query = "delete from alatkesehatan where id_alatkesehatan= ".$_GET['id_alatkesehatan'];
    $output = $koneksi->query($query);
    header('location: alatkesehatan.php');
?>