<?php
    include '../konfig/cek_login.php';
    include '../konfig/config.php';
    require_once '../konfig/koneksi.php';

        $result = mysqli_query($link, "SELECT * FROM users");
    
         //query berikut akan jalan jika button Ubah Password diklik
         if(isset($_POST['reset'])){
            $errors = 0;
