<?php 
    //session_start(); // di sini kita buat session start

    include '../konfig/config.php'; 
    // tapi taruh posisinya setelah include konfig config.php ini
    // karena di file cek belum login kita ada pakai variablenya
    include '../konfig/cek_belum_login.php'; // di dalam include file ini juga ada session start
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
    <div class="page">
      <!-- Main Navbar-->
    
      <?php include '../includes/admin/header.php'?>

      <div class="page-content d-flex align-items-stretch"> 
      
      <?php include '../includes/admin/sidebar.php'?>

      
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
    
         <!--Dashboard Counts Section--> 
         <!-- Dashboard Counts Section-->
         <section class="dashboard-counts no-padding-bottom" >
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Users</span>
                      <div class="progress">
                      <?php 
                      $user="select count(username) from users where id_level_access=2";
                      $userq=mysqli_query($link,$user);
                      $userq = $userq->fetch_assoc();
                      ?>
                        <div role="progressbar" style="width: 15%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $userq['count(username)'] ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>Orders</span>
                      <div class="progress">
                      <?php 
                      $query="select count(*) from pesanan";
                      $data=mysqli_query($link,$query);
                      $data = $data->fetch_assoc();
                      ?>
                        <div role="progressbar" style="width: 30%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $data['count(*)'] ?></strong></div>
                  </div>
                </div>
          <!-- Page Footer-->

          <?php include '../includes/admin/footer.php'?>

        </div>
      </div>
    </div>
    <?php include '../includes/admin/js.php'?>
  </body>
</html>