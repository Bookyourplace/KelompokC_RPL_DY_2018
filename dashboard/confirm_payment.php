<?php
    session_start();
    include '../konfig/config.php'; 
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
        header('Location:../login.php');

        if(isset($_GET['notif']) && $_GET['notif'] == 1)
        echo "<script>alert('Pembayaran Berhasil!');</script>";

        $sql = "SELECT pesanan.*, (select sum(menu_pesanan.harga_pesanan_persatuan * menu_pesanan.quant) from menu_pesanan where menu_pesanan.id_pesanan=pesanan.id_pesanan) total_harga FROM `pesanan`";
        $data = mysqli_query($link, $sql);
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BookYourPlace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">

        <!--css-->
        <?php include '../includes/admin/css.php'; ?>
    </head>

    <body>
    <div class="page">
            <!--header-->
            <?php include '../includes/admin/header.php'?>

            <div class="page-content d-flex align-items-stretch">
             <!--sidebar-->
             <?php include '../includes/admin/sidebar.php'?>
        
             <div class="content-inner">