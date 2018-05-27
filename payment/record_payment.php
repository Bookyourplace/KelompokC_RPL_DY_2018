<?php

    //session_start();
    include '../konfig/cek_belum_login.php';
    include '../konfig/config.php';

    require_once '../konfig/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RECORD PAYMENT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include '../includes/user/css.php'?>
</head>

<body>


<?php include '../includes/user/header.php'?>
<?php include '../includes/user/sidebar.php'?>

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/payment.jpg);">
    <h2 class="tit6 t-center">
    RECORD PAYMENT