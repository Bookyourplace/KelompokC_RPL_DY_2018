<?php 
    session_start();
    include '../konfig/config.php';
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
    header('Location:../login.php');

    $sql = "SELECT * FROM review";
    $data = mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BookYourPlace</title>
    <meta name="description" content="">
    <meta nama="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    
    <?php include '../includes/admin/css.php'; ?>
    </head>

