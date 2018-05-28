<?php
    include '../konfig/cek_login.php';
    include '../konfig/config.php';
    require_once '../konfig/koneksi.php';

    $result = mysqli_query($link, "SELECT * FROM users");