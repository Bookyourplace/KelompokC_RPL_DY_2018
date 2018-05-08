<?php
    session_start();

    if(isset($_SESSION['nama_user'])){
        // jika login sebagai admin
        if($_SESSION['level_akses'] == 1)
            header('Location: ../dashboard');
        else if($_SESSION['level_akses'] == 2) // jika login sebagai user
            header('Location: ../index.php');
    }