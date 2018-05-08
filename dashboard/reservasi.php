<?php 
    session_start();

    include '../konfig/config.php'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BookYourPlace</title>
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

        <!-- Side Navbar -->
        <?php include '../includes/admin/sidebar.php'?>
 
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Reservasi</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Reservasi            </li>
            </ul>
          </div>
    
          <!-- Page Footer-->
          <?php include '../includes/admin/footer.php'?>

        </div>
      </div>
    </div>

    <?php include '../includes/admin/js.php'?>

  </body>
</html>