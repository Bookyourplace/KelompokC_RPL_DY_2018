<?php
    session_start();
    include '../konfig/config.php'; 
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
        header('Location:../login.php');

        if(isset($_GET['notif']) && $_GET['notif'] == 1)
        echo "<script>alert('Pembayaran Berhasil!');</script>";

        $sql = "SELECT payment.*, pesanan.*, (select sum(menu_pesanan.harga_pesanan_persatuan * menu_pesanan.quant) from menu_pesanan where menu_pesanan.id_pesanan=pesanan.id_pesanan) total_harga FROM `pesanan` LEFT join payment on payment.id_pesanan=pesanan.id_pesanan where (select sum(menu_pesanan.harga_pesanan_persatuan * menu_pesanan.quant) from menu_pesanan where menu_pesanan.id_pesanan=pesanan.id_pesanan) is NOT NULL and payment.id_pesanan is null";
        // var_dump($sql);
        // die();
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

             <!-- page header-->
             <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Konfirmasi Pembayaran</h2>
                    </div>
                </header>

             <!-- Breadcrumb-->
             <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Pembayaran</li>
                    </ul>
                </div>
                <br>

                <div>
                    <table align="center" border="5"  cellpadding="3" style="width:80%">
                        <thead>
                            <tr align="center" height="80">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Id Pesanan</th>
                            <th>Id Meja</th>
                            <th>Total Harga</th>
                            <th style="width:100px; text-align:center">Aksi</th>
                            </tr>
                        </thead>

                         <tbody>
                            <?php
                            for ($i = 1; $row = mysqli_fetch_assoc($data); $i++) :
                                $sql = "select * from book where id_pesanan=$row[id_pesanan]";
                                $tables = mysqli_query($link, $sql);
                            ?>

                            <tr>
                            <td align="center"><?php echo $i; ?></td>
                            <td align="center"><?php echo $row['username']; ?></td>
                            <td align="center"><?php echo $row['id_pesanan']; ?></td>
                            <td align="center">
                            <?php while ($table = mysqli_fetch_assoc($tables)) {
                                echo "$table[id_meja],";
                            } ?>