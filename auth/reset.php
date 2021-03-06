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
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" action ="reset.php" class="form-validate">
                    <div class="form-group">
                    <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                        <label for="register-email" class="label-material">Email Address      </label>
                      </div>
                      <div class="form-group">
                      <input id="register-password" type="password" name="passwordlama" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material"> Password Lama</label>
                    </div>

                    <div class="form-group">
                      <input id="register-password" type="password" name="passwordbaru" required data-msg="Please enter your new password" class="input-material">
                      <label for="register-password" class="label-material">Password Baru</label>
                    </div>

                    <div class="form-group">
                      <input id="register-password" type="password" name="confirmpassword" required data-msg="Please enter confirm password" class="input-material">
                      <label for="register-password" class="label-material">Confirm Password</label>
                    </div>
                     <!--<div class="form-group terms-conditions">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">Agree the terms and policy</label>
                    </div>-->
                    <div class="form-group">
                      <button id="register" type="submit" name="reset"  class="btn btn-primary">Reset</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="#" class="external">BookYourPlace</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </p>
      </div>
    </div>
    <!-- JavaScript files-->
    
   <?php include '../includes/admin/js.php'?>

  </body>
</html>