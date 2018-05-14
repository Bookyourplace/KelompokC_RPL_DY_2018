<?php
  //session_start();
  include '../konfig/cek_belum_login.php';
  include "../konfig/config.php";
 

  // jika ada post submit ada
  if(isset($_POST['submit'])){
	$_SESSION['book_table'] = $_POST; // masukkan data post dari user ke dalam session book table
	header('Location: ' . $config['site_url'] . 'reservasi/choosetable.php'); // redirect ke halaman choostable
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="widtd=device-width, initial-scale=1">

	<?php include '../includes/user/css.php'?>
</head>

<body>

	<!-- Header -->
	<?php include '../includes/user/header.php'?>

	<!-- Sidebar -->
	<?php include '../includes/user/sidebar.php'?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/2.jpg);">
		<h2 class="tit6 t-center">
			Reservation
		</h2>
	</section>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" method="post">
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Date
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
							</div>
						
							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Time
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
										<option>10:00</option>
										<option>10:30</option>
										<option>11:00</option>
										<option>11:30</option>
										<option>12:00</option>
										<option>12:30</option>
										<option>13:00</option>
										<option>13:30</option>
										<option>14:00</option>
										<option>14:30</option>
										<option>15:00</option>
										<option>15:30</option>
										<option>16:00</option>
										<option>16:30</option>
										<option>17:00</option>
										<option>17:30</option>
										<option>19:00</option>
										<option>19:30</option>
										<option>20:00</option>
										<option>20:30</option>
										<option>21:00</option>
										<option>21:30</option>
										<option>22:00</option>
										
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									People
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="people" placeholder="People">
									</input>
								</div>
							</div>
						</div>
	  
						<!--</div>-->


						<div class="wrap-btn-booking flex-c-m m-t-6" style="margin:auto;width:50%;">
							<!-- Button3 -->
							<button type="submit" name="submit" style="text-align:center; margin-bottom: 60px;" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
								Choose Table
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="info-reservation flex-w p-t-80">
			
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<?php include '../includes/user/js.php'?>

</body>
</html>