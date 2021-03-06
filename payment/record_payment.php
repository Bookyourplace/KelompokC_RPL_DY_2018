<?php

    //session_start();
    include '../konfig/cek_belum_login.php';
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
			RECORD PAYMENT
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
                PAYMENT RECORD
              </h3>

              <div class="container">
                  
                <table class="table table-hover">
                   <tr>
                    <th>ID Order</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Table</th>
                    <th>Detail</th>
                    </tr> 
                    <?php
    $q = "SELECT pesanan.id_pesanan, pesanan.date, pesanan.time, pesanan.people, book.id_meja FROM pesanan, book WHERE pesanan.id_pesanan=book.id_pesanan  AND pesanan.username='".$_SESSION['login_user']."' order by id_pesanan desc";
    $query = mysqli_query($link, $q);
    while ($rs = mysqli_fetch_array ($query)) {
          
    ?>
                  
                  <tr>
                     <td style="text-align: left;"><?php echo $rs['id_pesanan']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['date']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['time']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['people']; ?></td>
                    <td style="text-align: left;"><?php echo $rs['id_meja']; ?></td>
                    <td>
                      <a href="<?php echo $config['site_url'] ?>payment/detail_payment.php?id_order=<?php echo $rs['id_pesanan']; ?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                     <?php
    }
    ?>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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