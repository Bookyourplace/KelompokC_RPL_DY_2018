<?php
    include '../konfig/cek_login.php';
    include '../konfig/config.php';
    require_once '../konfig/koneksi.php';

        $result = mysqli_query($link, "SELECT * FROM users");
    
         //query berikut akan jalan jika button Ubah Password diklik
         if(isset($_POST['reset'])){
            $errors = 0;
             //memasukkan data yang diinput kedalam masing-masing variabel
        $email= mysqli_real_escape_string($link,$_POST['email']);
        $passwordlama = mysqli_real_escape_string($link,$_POST['passwordlama']);
        $passwordbaru= mysqli_real_escape_string($link,$_POST['passwordbaru']);
        $confirmpassword= mysqli_real_escape_string($link,$_POST['confirmpassword']);
        
         //pastikan form diisi
         $cek=mysqli_query($link,"select password from users where email='$email'");
         $passwordlama = md5($_POST['passwordlama']);
         if(mysqli_num_rows($cek)<0){
           echo "<script>alert('Password Lama Tidak Sesuai');history.go(-1);</script>";
           return;
         }

         
        if($passwordbaru != $confirmpassword){
            ++$errors;
            echo "Password tidak cocok !!!<br>";
        }
        //echo "Jumlah Error : ".$errors."<br>";
        if($errors==0){
          $passwordbaru = md5($_POST['passwordbaru']);
          $result = mysqli_query($link, "UPDATE users SET password='$passwordbaru' where email='$email'");
          if($result){
            echo "<script>alert('Reset Password Berhasil');history.go(-1);</script>";

        }else{   echo "<script>alert('Reset Password Gagal');history.go(-1);</script>";  }
    }
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Your Place</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    
    <?php include '../includes/admin/css.php'?>

  </head>
  <body>
  <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
           <!-- Logo & Information Panel-->
           <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>BookYourPlace</h1>
                    </div>
                  <p>Web Reservasi tempat dan Pemesanan Makanan di Cafe Grand Aceh Kuliner.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->