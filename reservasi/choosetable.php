<?php 
  include "../konfig/config.php";
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
			background:linear-gradient(top, #A6FC3C 0%, #A6FC3C 100%);
			background:-webkit-linear-gradient(top, #A6FC3C 0%, #A6FC3C 100%);
		}
		.tabel td:hover{
			background:orange;
		}
	</style>

<?php include '../includes/user/css.php'?>

</head>
<body>

asdadasd
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
							
  								<table class = "tabel">
									<tr>
									  <td name="tabel1">1</td>
									  <td name="tabel2">2</td>
									  <td name="tabel3">3</td>
									  <td name="tabel4">4</td>
									  <td name="tabel5">5</td>
									</tr>
									<tr>
									  <td name="tabel6">6</td>
									  <td name="tabel7">7</td>
									  <td name="tabel8">8</td>
									  <td name="tabel9">9</td>
									  <td name="tabel10">10</td>
									</tr>

									<tr>
									  <td name="tabel11">11</td>
									  <td name="tabel12">12</td>
									  <td name="tabel13">13</td>
									  <td name="tabel14">14</td>
									  <td name="tabel15">15</td>
									</tr>
									<tr>
									  <td name="tabel16">16</td>
									  <td name="tabel17">17</td>
									  <td name="tabel18">18</td>
									  <td name="tabel19">19</td>
									  <td name="tabel20">20</td>
									</tr>

									<tr>
									  <td name="tabel21">21</td>
									  <td name="tabel22">22</td>
									  <td name="tabel23">23</td>
									  <td name="tabel24">24</td>
									  <td name="tabel25">25</td>
									</tr>
									<tr>
									  <td name="tabel26">26</td>
									  <td name="tabel27">27</td>
									  <td name="tabel28">28</td>
									  <td name="tabel29">29</td>
									  <td name="tabel30">30</td>
									</tr>

									<tr>
									  <td name="tabel31">31</td>
									  <td name="tabel32">32</td>
									  <td name="tabel33">33</td>
									  <td name="tabel34">34</td>
									  <td name="tabel35">35</td>
									</tr>
									<tr>
									  <td name="tabel36">36</td>
									  <td name="tabel37">37</td>
									  <td name="tabel38">38</td>
									  <td name="tabel39">39</td>
									  <td name="tabel40">40</td>
									</tr>
									  
								</table>
								<div class="wrap-btn-booking flex-c-m m-t-6">
									<!-- Button3 -->
									<a style= "margin-bottom: 150px; margin-top:30px; border-radius:10px;" type="submit"  href="<?php echo $config['site_url'] ?>menu/ordermenu.php" class="btn3 flex-c-m size13 txt11 trans-0-4" >
											Order Menu
									</a>
							</div>
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