<?php 
    //session_start(); // di sini kita buat session start

    include '../konfig/config.php'; 
    require '../konfig/koneksi.php'; 
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
  <body >
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
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Total<br>Review</span>
                      <div class="progress">
                        <?php 
                        $query="select count(*) from review";
                        $data=mysqli_query($link,$query);
                        $data = $data->fetch_assoc();
                        ?>
                        <div role="progressbar" style="width: 10%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $data['count(*)'] ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Total<br>Menu</span>
                      <div class="progress">
                        <?php 
                        $query="select count(*) from menu";
                        $data=mysqli_query($link,$query);
                        $data = $data->fetch_assoc();
                        ?>
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $data['count(*)'] ?></strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-users"></i></div>
                    <div class="text"><strong>15</strong><br><small>Jumlah Pelayan</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-user-o"></i></div>
                    <div class="text"><strong>6</strong><br><small>Jumlah Koki</small></div>
                  </div>
                  
              </div>
            </div>
          </section>
         
          
                  
            
          
    
    
          
          <!-- Page Footer-->

          <?php include '../includes/admin/footer.php'?>

        </div>
      </div>
    </div>
    <?php include '../includes/admin/js.php'?>
  </body>
</html>