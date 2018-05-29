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
          <!-- Page Footer-->

          <?php include '../includes/admin/footer.php'?>

        </div>
      </div>
    </div>
    <?php include '../includes/admin/js.php'?>
  </body>
</html>