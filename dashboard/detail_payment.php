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