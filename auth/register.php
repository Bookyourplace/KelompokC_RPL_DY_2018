<?php 
    include '../konfig/cek_login.php';
    include '../konfig/config.php';
    require_once '../konfig/koneksi.php';

  //var_dump($_POST);var_dump($_POST);

    if (isset($_POST['registerSubmit'])){
        $nama = htmlentities(strip_tags($_POST['username']));
        $email = htmlentities(strip_tags($_POST['email']));
        $no_hp = htmlentities(strip_tags($_POST['no_Hp']));
        $password = md5(htmlentities(strip_tags($_POST['password'])));
  
       
         
          $sql ="insert into users (username, email, no_hp, password, id_level_access) values ('$nama','$email','$no_hp','$password', 2)";
          $status = mysqli_query($link,$sql);
          header('Location: login.php');
          
  
          if($status){
            $alert ="Proses registrasi berhasil.";
          }else{
            $alert="Proses registrasi gagal.";
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
                  <form method="post" class="form-validate">
                    <div class="form-group">
                      <input id="register-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address      </label>
                    </div>

                    <div class="form-group">
                      <input id="register-noHp" type="tel" name="no_Hp" required data-msg="Please enter a valid phone number" class="input-material">
                      <label for="register-nohp" class="label-material">Phone Number      </label>
                    </div>

                    <div class="form-group">
                      <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">password        </label>
                    </div>
                    <!--<div class="form-group terms-conditions">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">Agree the terms and policy</label>
                    </div>-->
                    <div class="form-group">
                      <button id="register" type="submit" name="registerSubmit" href="login.php" class="btn btn-primary">Register</button>
                    </div>
                  </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
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