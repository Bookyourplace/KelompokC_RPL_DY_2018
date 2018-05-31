<?php
    session_start();
    include '../konfig/config.php'; 
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
        header('Location:../login.php');

        if(isset($_GET['notif']) && $_GET['notif'] == 1)
        echo "<script>alert('Pembayaran Berhasil!');</script>";