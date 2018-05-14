<?php
    session_start();

    if(!isset($_SESSION['nama_user'])){
        header('Location: '.$config['site_url'] . '../auth/login.php');
    }


  