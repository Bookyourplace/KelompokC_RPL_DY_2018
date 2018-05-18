<?php 
  include "../konfig/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include '../includes/user/css.php'?>

</head>
<body>

	<!-- Header -->
	<?php include '../includes/user/header.php'?>

	<!--sidebar-->
	<?php include '../includes/user/sidebar.php'?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar32.jpg);">
		<h2 class="tit6 t-center">
			About Us
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Book Your Place
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Our Story
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Web ini dibuat untuk melakuakan reservasi tempat dan pemesanan makanan di Grand Aceh Kuliner Cafe.
			Dengan web ini, pengunjung dapat lebih mudah dalam melakukan reservasi tanpa harus mendatangi cafe tersebut terlebih dahulu.
			Selain reservasi, pengunjung juga dapat melihat menu-menu makanan yang ada di cafe ini dan bisa langsung memesan makanan tersebut
			setelah melakukan reservasi, pengunjung juga langsung dapat memesan makanan di dalam web ini. Cafe ini juga memberikan layanan untuk meeting.
		</p>
	</section>


	<!-- Delicious & Romantic-->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<!-- Delicious -->
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							Delicious
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							RECIPES
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Seluruh makanan terbuat dari bahan makanan yang halal serta fresh langsung di ambil dari perkebunan, sehingga citarasa dan kualitas makanan tidak berubah.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="<?php echo $config['site_url']?>assets/users/images/gambar47.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>


			<!-- Romantic -->
			<div class="row p-t-170">
				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="<?php echo $config['site_url']?>assets/users/images/gambar48.jpg" alt="IMG-OUR">
					</div>
				</div>

				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Cozy
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Restaurant
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
						Suasana Grand Kuliner Aceh yang cozy dan mengusung konsep outdoor sangat diminati oleh anak muda dan juga orang dewasa.
						Konsep outdoor diusung karena lokasi restaurant ini dekat dengan pantai dan ingin membuat pengunjung lebih leluasa melakukan kegatan di restaurant ini. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="parallax0 parallax100" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/gambar13.jpg);">
		<div class="overlay0-parallax t-center size33"></div>
	</div>


	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Meet Our
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Chef
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="<?php echo $config['site_url']?>assets/users/images/chef2.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Nisa Adrina
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Mengukir prestasi dalam bidang kuliner sejak 2010 dan kini menjadi chef bagian kuliner nusantara.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="<?php echo $config['site_url']?>assets/users/images/chef1.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Syarifuddin
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Sudah 5 tahun bekerja di restaurant ternama Indonesia. Fokus pada proses pembuatan dimsum.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="<?php echo $config['site_url']?>assets/users/images/chef3.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Jihad Aulia
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Berasal dari timur tengah, sengaja dihadirkan untuk mengambil fokus pembuatan pastry di restaurant ini.
							</p>
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

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<?php include '../includes/user/js.php'?>

</body>
</html>
