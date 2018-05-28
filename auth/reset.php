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

