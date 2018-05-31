<?php 
     session_start();
     error_reporting(E_ERROR | E_WARNING | E_PARSE);

  include "../konfig/config.php";
  require_once "../konfig/koneksi.php";

   // jika session book table tidak ada, bisa jadi user masuk langsung dengan cara ketik URL ke halaman order menu dari browser
  // bukan dengan cara isi form di halaman reservasi
  if(!isset($_SESSION['book_table'])){
    header('Location: ' . $config['site_url'] . 'reservasi/reservation.php'); // redirect user ke halaman reservasi agar isi reservasi dulu
  }

  // jika session choose table tidak ada, bisa jadi user masuk langsung dengan cara ketik URL ke halaman order menu dari browser
  // bukan dengan cara isi form di halaman reservasi
  if(!isset($_SESSION['choose_table'])){
    header('Location: ' . $config['site_url'] . 'reservasi/choosetable.php'); // redirect user ke halaman choose table agar isi reservasi dulu
  }

  if(isset($_POST['submit'])){
	  // menambah data reservasi ke dalam database
	  $date = $_SESSION['book_table']['date'];
	  $date = str_replace('/', '-', $date);
	  $date = date('Y-m-d', strtotime($date)); 
	  

	  $time = $_SESSION['book_table']['time'];
	  $people = $_SESSION['book_table']['people'];

	  $sql = "INSERT INTO pesanan(username, date, time, people) values('$_SESSION[login_user]', '$date', '$time', '$people')"; //query pengambilan data dari db
	  $status = $link->query($sql) or die(mysqli_error($link));
	  if($status){
		  // menambah data meja yang di booking
		  $id_pesanan = $link->insert_id;
		  $meja = $_SESSION['choose_table']['meja'];

		  foreach ($meja as $key => $value) {
			  $sql = "INSERT INTO book(id_meja, id_pesanan) VALUES($value, $id_pesanan)";
			  $status = $link->query($sql) or die(mysqli_error($link));
	  }

	  //menambah data menu pesanan
	  if($status){
		$menu = $_POST['menu'];

		foreach ($menu as $key => $value) {
			$qty = $_POST['qty'][$value];
			$harga = $_POST['harga'][$value];

			$sql = "INSERT INTO menu_pesanan(id_pesanan, id_menu, quant, harga_pesanan_persatuan) VALUES ($id_pesanan, $value, $qty, $harga)";
			$status = $link->query($sql) or die("menu" . mysqli_error($link));
		  }
	 }

	 // mengapus session
	 unset($_SESSION['book_table']);
	 unset($_SESSION['choose_table']);

	 echo "<script>alert('Booking berhasil.')</script>";
	}else
		echo 'gagal';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Menu</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include '../includes/user/css.php'?>

</head>

<body>
    <?php include '../includes/user/header.php'?>
    <?php include '../includes/user/sidebar.php'?>

    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/order.jpeg);">
		<h2 class="tit6 t-center">
			Order Menu
		</h2>
    </section>
    
    <section class="p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="border-right: 1px solid #ccc; background:#F7F7F7 !important;">
                    <h3>Kategori</h3>

                    <div class="booking_left">
						<a href="<?php echo $config['site_url'] . 'menu/ordermenu.php' ?>">
							<?php if(!isset($_GET['kategori'])): ?>
								<strong>Semua Kategori</strong>
							<?php else: ?>
								Semua Kategori
							<?php endif; ?>
						</a>
					</div>
                    <div class="clearfix"></div>

                    <?php
                        $menu_query = $link->query("select * from `kategori`") or die(mysqli_error());
                        while($menu_row = mysqli_fetch_assoc($menu_query)){
							echo '<div class="booking_left"><a href="'.$config['site_url'] . 'menu/ordermenu.php?kategori=' . $menu_row['id_kategori'].'">';
							echo isset($_GET['kategori']) && $menu_row['id_kategori'] == $_GET['kategori'] ? "<strong>$menu_row[jenis_kategori]</strong>" : $menu_row['jenis_kategori'];
							echo '</a></div>';
                            echo '<div class="clearfix"></div>';
                        }
                    ?>
                </div>

                <div class="col-md-9" style="text-align:left;">
                    <h3>Menu</h3>

					<!-- Menampilkan menu pada halaman -->
                    <form method="post">
						<div style="margin-left:50px; max-height:300px;overflow:auto">
							<?php 
								$sql = "select * from `menu`";
								if(isset($_GET['kategori']))
									$sql .= " where id_kategori=$_GET[kategori]";
								$menu_query = $link->query($sql) or die(mysqli_error());
								while($menu_row = mysqli_fetch_assoc($menu_query)):
							?>
								<div class="booking_left" style="margin-bottom:15px; border-bottom:1px solid #ccc;padding-bottom:5px">
									<div style="float:left">
										<input type="checkbox" name="menu[]" value="<?php echo $menu_row['id_menu'] ?>"> <?php echo $menu_row['nama_menu'] ?><br/>
										<small>Rp <?php echo number_format($menu_row['harga']) ?></small>
									</div>
									<div style="float:right">
										<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-b-10">
											<input style="width:80px" class="bo-rad-10 sizefull txt10 p-l-20" name="qty[<?php echo $menu_row['id_menu'] ?>]" type="number" name="people" placeholder="Qty">
											<input type="hidden" name="harga[<?php echo $menu_row['id_menu'] ?>]" value="<?php echo $menu_row['harga'] ?>">
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							<?php
								endwhile;
							?>
						</div>

						<div style="text-align:right">
							<button name="submit" style= "border-radius:10px;margin:0;margin-top:25px" type="submit" class="btn3 size13 txt11" >
								Checkout
							</button>
						</div>
					</form>
                </div>
            </div>
        </div>
	</section>

    <!-- Footer -->
    <?php include '../includes/user/footer.php'?>
    

    <?php include '../includes/user/js.php'?>

</body>
</html>