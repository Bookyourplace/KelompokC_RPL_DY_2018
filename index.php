<?php 
  include "konfig/config.php";
  include "konfig/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include 'includes/user/css.php'?>

</head>
<body>

	<!-- Header -->
	<?php include 'includes/user/header.php'?>
	

	<!-- Sidebar -->
	<?php include 'includes/user/sidebar.php'?>



	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Book Your Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="<?php echo $config['site_url'] ?>menu/menu.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Book Your Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="<?php echo $config['site_url'] ?>menu/menu.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170"> <!-- slider konten di home -->
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Book Your Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="<?php echo $config['site_url'] ?>menu/menu.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<!--<span class="tit2 t-center">
							Italian Restaurant
						</span>-->

						<h3 class="tit3 t-center m-b-35 m-t-5">
							About Us
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
						Book Your Place merupakan sebuah website reservasi tempat di Grand Kuliner Aceh yang terletak di Jl. Sultan Iskandar Muda, Gp.Lambung, Ulee-Lheue, Banda Aceh. 
						</p>

						<a href="<?php echo $config['site_url'] ?>about/about.php" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img style="border:0px; width:400px; height:400px;" src="<?php echo $config['site_url']?>assets/users/images/gambar6.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar8.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Book Your Place
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img style="border:0px; width:500px;height:250px;" src="<?php echo $config['site_url']?>assets/users/images/gambar11.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Cozy Restaurant
								</h4></a>

								<p class="m-b-20">
									Grand Aceh Kuliner menyediakan banyak ragam jenis makanan. Baik makanan khas Aceh sampai makanan Jepang.
								</p>

								<!--<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>-->
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img style="border:0px; width:500px;height:250px;" src="<?php echo $config['site_url']?>assets/users/images/gambar27.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Delicious Food
								</h4></a>

								<p class="m-b-20">
									Mie Aceh merupakan makanan khas Aceh dan menjadi favorit masyarakat aceh dan para wisatawan.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img style="border:0px; width:500px;height:250px;" src="<?php echo $config['site_url']?>assets/users/images/coffee.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Espresso You Love
								</h4></a>

								<p class="m-b-20">
									Espresso terbaik di Banda Aceh
								</p>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Discover
				</span>

				<h3 class="tit5 t-center m-t-2">
					Hot Promo
				</h3>
			</div>	

			<div class="row">
				<div class="col-lg-7 col-sm-6">
					<img style ="border:0px; width:500px;height:300px;" src="<?php echo $config['site_url']?>assets/users/images/nasgor.gif" alt="IMG-MENU">
					<a  href="#" class="btn2 flex-c-m txt4 ab-c-m size5">
									Nasi Goreng
									<br>Rp.10.000</br>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<img style ="border:0px; width:500px;height:300px;" src="<?php echo $config['site_url']?>assets/users/images/gambar41.jpg" alt="IMG-MENU">
					<a  href="#" class="btn2 flex-c-m txt4 ab-c-m size5">
									Sate Geuregok
									<br>Rp.15.000</br>
					</a>
				</div>
				
				<div class="col-lg-7 col-sm-6">
					
					<img style ="border:0px; width:500px;height:300px;" src="<?php echo $config['site_url']?>assets/users/images/gambar36.jpg" alt="IMG-MENU">
					<a  href="#" class="btn2 flex-c-m txt4 ab-c-m size5">
									Cheese Cake
									<br>Rp.22.000</br>

					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<img style ="border:0px; width:500px;height:300px;" src="<?php echo $config['site_url']?>assets/users/images/gambar34.jpg" alt="IMG-MENU">
					<a  href="#" class="btn2 flex-c-m txt4 ab-c-m size5">
									Waffle
									<br>Rp.25.000</br>
					</a>
				</div>
			</div>
		
	</section>


	<!-- Review -->
	<section class="section-review p-t-115">
		<!-- - -->
		<div class="title-review t-center m-b-2">
			<span class="tit2 p-l-15 p-r-15">
				Customers Say
			</span>

			<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
				Review
			</h3>
		</div>

		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">
				<?php 
					$syntax="SELECT username, comment from review order by id_review";
					$data = $link->query($syntax) or die($link);

					while ($row = mysqli_fetch_assoc($data)) :
				?>
					<div class="item-slick3 item1-slick3">
						<div class="wrap-content-slide3 p-b-50 p-t-50">
							<div class="container">				
								<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
									<p class="t-center txt12 size15 m-l-r-auto">
										“<?php echo $row["comment"]; ?>” - <?php echo $row["username"] ?>
									</p>

									<!-- <div class="star-review fs-18 color0 flex-c-m m-t-12">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star p-l-1" aria-hidden="true"></i>
										<i class="fa fa-star p-l-1" aria-hidden="true"></i>
										<i class="fa fa-star p-l-1" aria-hidden="true"></i>
										<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									</div> -->

									<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
										Marie Simmons ˗ New York
									</div>
									<a style= "center"; class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" href="<?php echo $config['site_url'] ?>review/review.php" >Write your review</a>
								</div>
							</div>
						</div>
					</div>
				<?php 
					endwhile; 
				?>
			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section>


	<!-- Login -->

	<section class="section-signup bg1-pattern p-t-85 p-b-85">
            <div class="container">     
                        <h2 style="text-align:center"; margin-bottom:50px;> Do you want to book the table? </h2> 
					<a style= "center"; class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" href="<?php echo $config['site_url'] ?>auth/login.php" >LOGIN HERE</a>
				</div>
            </div>
    </section>



	<!-- Footer -->
	<?php include 'includes/user/footer.php'?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>




	<?php include 'includes/user/js.php'?>
	

</body>
</html>
