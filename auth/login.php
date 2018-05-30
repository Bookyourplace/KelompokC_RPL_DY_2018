<?php 
//session_start();

    include '../konfig/cek_login.php';
    include '../konfig/config.php';
    require_once "../konfig/koneksi.php";
    //var_dump($_POST);
  

if (isset($_POST['submitButton'])){
  $username= htmlentities(strip_tags($_POST['username']));
  $password = md5(htmlentities(strip_tags($_POST['password'])));

  $sql = "SELECT * FROM users WHERE username ='$username' and password ='$password'";
 
  $data = mysqli_query($link,$sql);

  if (mysqli_num_rows($data)>0){

    $data = mysqli_fetch_assoc($data);
    $_SESSION['nama_user'] = $data['username'];
    $_SESSION['level_akses'] = $data['id_level_access'];
    $_SESSION['login_user'] = $username;

//untuk level akses ini udah aman.
//prosessnya jadi cuman cek kayak gini aja
//untuk ke sessionnya kita masukin data kayak yang di baris 21.

    // jika login sebagai admin
    if($data['id_level_access'] == 1)
      header('Location: ../dashboard');
    else if($data['id_level_access'] == 2) // jika login sebagai user
      header('Location: ../index.php');
    
  }
  else{
 echo   $alert ="email atau password salah.";
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
                    <h1>Book Your Place</h1>
                  </div>
                  <p>Web Reservasi Tempat dan Pemesanan Makanan di Cafe Grand Aceh Kuliner.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>

                    <div class="form-group">
                      <button id="login" type="submit" name="submitButton" href="index.php" class="btn btn-primary">Login</button>
                    </div>
                    
                    
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="reset.php" class="forgot-pass">Do you want to change Password?</a><br><small>Do not have an account? </small><a href="register.php" class="signup">Signup</a>
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
    <?php include '../includes/admin/js.php'?>
  </body>
</html>
