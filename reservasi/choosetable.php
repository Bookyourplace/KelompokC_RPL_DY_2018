<?php 
	//session_start();
	include '../konfig/cek_belum_login.php';
	include "../konfig/config.php";
	
	// jika session book table tidak ada, bisa jadi user masuk langsung dengan cara ketik URL ke halaman choosetable dari browser
	// bukan dengan cara isi form di halaman reservasi
	if(!isset($_SESSION['book_table'])){
		header('Location: ' . $config['site_url'] . 'reservasi/reservation.php'); // redirect user ke halaman reservasi agar isi reservasi dulu
	}

	$sql = "SELECT * FROM meja";
	$data = mysqli_query($link, $sql);

	// jika ada post submit ada
	if(isset($_POST['submit'])){
		$_SESSION['choose_table'] = $_POST; // masukkan data post dari user ke dalam session choose table
		header('Location: ' . $config['site_url'] . 'menu/ordermenu.php'); // redirect ke halaman choostable
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Choose Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style>
		.tabel{
			width:600px;
			margin:auto;
			text-align:center;
			table-layout:fixed;
		}
		.tabel tr td{
			padding:20px;
			color:BLACK;
			border:1px solid #080808;
			border-collapse:collapse;
			font-size:18px;
			font-family:Arial;
			background:linear-gradient(top, #696773 0%, #696773 100%);
			background:-webkit-linear-gradient(top, #696773 0%, #696773 100%);
		}
		.tabel td:hover{
			background:orange;
		}
	</style>

<?php include '../includes/user/css.php'?>

</head>
<body>


	<!-- Header -->
		<?php include '../includes/user/header.php'?>
		<?php include '../includes/user/sidebar.php'?>


		<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/2.jpg);">
		<h2 class="tit6 t-center">
			Choose Table
		</h2>
	</section>

	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Choose Table
						</h3>
					</div>

    
   <div class="container">
		 		<form method="post">
							<table class = "tabel">
								
									  
								</table>
								<div class="wrap-btn-booking flex-c-m m-t-6">
									<!-- Button3 -->
									<button name="submit" style= "margin-bottom: 150px; margin-top:30px; border-radius:10px;" type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" >
											Order Menu
									</button>
								</div>
				</form>
	</div>
					
  								
	
<!-- Footer -->
	<?php include '../includes/user/footer.php'?>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<?php include '../includes/user/js.php'?>


</body>
</html>