<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $op = $_GET['op'];

    if ($op == "in") {
        $query_l = "SELECT * FROM datauser where username='$username' AND password='$password' ";
        $h_l = $koneksi->query($query_l);
        if (mysqli_num_rows($h_l) == 1) {
            $d_l = $h_l->fetch_array();
            $_SESSION['username'] = $d_l['username'];
            header('location:obat.php');
        } else {
            die("PASSWORD SALAH! <a href=\"javascript:history.back()\">Kembali</a>");
        }
    } elseif ($op == "out") {
        unset($_SESSION['username']);
        header("location:login.php");
    }