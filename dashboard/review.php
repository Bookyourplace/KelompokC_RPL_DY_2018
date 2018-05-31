<?php 
    session_start();
    include '../konfig/config.php';
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
    header('Location:../login.php');

    $sql = "SELECT * FROM review";
    $data = mysqli_query($link,$sql);
?>