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