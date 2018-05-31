<?php

    session_start();

   include '../konfig/config.php';
   require_once '../konfig/koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>RECORD PAYMENT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include '../includes/user/css.php'?>

</head>

<body>

<?php include '../includes/user/header.php'?>
<?php include '../includes/user/sidebar.php'?>


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/payment.jpg);">
		<h2 class="tit6 t-center">
			Detail PAYMENT
		</h2>
    </section>

    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
      <div class="">
        <div class="row">
          <div class="col-lg-12 p-b-30">
            <div class="t-center">
              <span class="tit2 t-center">
                YOUR
              </span>
                          
              <h3 class="tit3 t-center m-b-35 m-t-2">
                PAYMENT Detail 
              </h3>
                <span class="tit2 t-center">
                ID Order # <?php echo $_GET['id_order']  ?>
              </span>
              <div class="container">
                <table class="table table-hover">
                  <tr>
                    
                    <th>Table</th>
                    <th>Orders</th>
                    <th>Quant</th>
                    <th>Price</th>
                    </tr>
                     <?php
                 $q = "SELECT book.id_meja, menu.nama_menu, menu_pesanan.quant, menu_pesanan.harga_pesanan_persatuan FROM pesanan JOIN book ON pesanan.id_pesanan= book.id_pesanan JOIN menu_pesanan ON pesanan.id_pesanan=menu_pesanan.id_pesanan JOIN menu ON menu_pesanan.id_menu=menu.id_menu WHERE pesanan.id_pesanan='".$_GET['id_order']."'";
                 $query = mysqli_query($link, $q);
                 while ($rs = mysqli_fetch_array ($query)) {
          
                 ?>
                  
                  <tr>
                      <?php 
                      error_reporting(0);
                      $harga= $rs['quant'] * $rs['harga_pesanan_persatuan'];
                      $total= $total + $harga; ?>
                     <td style="text-align: left;"><?php echo $rs['id_meja']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['nama_menu']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['quant']; ?></td>
                    <td style="text-align: left;"><?php echo $harga; ?></td>
                   
                  </tr>
                     <?php
    }
    ?>
                  <tr>
                    <td colspan="3" style="text-align:right">Total</td>
                    <td style="text-align:left">
                    <?php
                    echo $total;
                    ?>
                    </td>
                  </tr>
                  </table>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
         
                     



<!-- Footer -->
<?php include '../includes/user/footer.php'?>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>



</body>
</html>