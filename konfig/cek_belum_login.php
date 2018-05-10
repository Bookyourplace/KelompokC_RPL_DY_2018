<?php
    session_start();

    if(!isset($_SESSION['nama_user'])){
        header('Location: '.$config['site_url'] . '../auth/login.php');
    }


    // ini sengaja abang buat jadi 2 file antara cek login sama cek belum login
    // karena kebetulan kalau cek udah login di halaman2 yang akan kita pasang itu ngga perlu cek belum login
    // gitu juga sebaliknya
    // jadi nanti tinggal include aja file cek belum login

    // bang berarti yang utk user biasa itu dia sebelom login hanya bisa akses home nya aja kan bg.
    //kalok si admin mmg gabisa akses apa2 tanpa login. isn't it ?! 

    // yap bisa di bilang kayak gitu.
    // tapi sebenarnya itu bebas gimana kalian set aja sih 
    // misalkan kalian mau set dia bisa liat juga meja2 yang kosong yang mana aja
    // tapi kalau mau booking ya harus login dulu
    // atau bisa liat menu juga. tapi kalau mau pesan harus login dulu
    // ngga ada paton baku untuk itu
    
    //oh begindas ya bg... tergantung yg buat. arasso
    // bg kami masih bingung tu wktu melihat meja available. ngesetnya itu pakek php berarti bg ya ??

    // atau kalian fokus aja dulu untuk proses booking dan lain2
    // untuk available atau ngganya itu buat nanti aja kalau memang masih bingung
    // yang pasti proses itu kita liat awalnya dari PHP
    // nanti palingan kita atur2 dikit dengan CSS yang available dan yang ngga itu beda warna
    // tapi proses pengecekannya tetap dengan PHP