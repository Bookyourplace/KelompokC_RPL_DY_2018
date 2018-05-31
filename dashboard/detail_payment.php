<?php
    session_start();
    include '../konfig/config.php'; 
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
        header('Location:../login.php');

        if(isset($_POST['submit'])){
            $id_pesanan = $_GET['id_pesanan'];
            $total = $_POST['total'];
            //$yang_dibayar = $_POST['yang_dibayar'];

            $sql = "insert into payment(id_pesanan, total_harga) values($id_pesanan, $total)";
            $data = mysqli_query($link, $sql);

            header("Location: confirm_payment.php?notif=1");
        }

        if(!isset($_GET['id_pesanan']))
        header('Location:' . $config['site_url'] . 'dashboard/confirm_payment.php');

        $id_pesanan = $_GET['id_pesanan'];
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
                        <h2 class="no-margin-bottom">Detail Pembayaran</h2>
                    </div>
                </header>

                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Detail Pembayaran</li>
                    </ul>
                </div>
                <br>

                <div class="container">
                    <div class="text-center">
                        <h1>Pesanan <?php echo $id_pesanan; ?></h1>
                        <br>
                    </div>