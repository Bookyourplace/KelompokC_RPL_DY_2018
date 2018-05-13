<?php 
	//session_start();
	include '../konfig/cek_belum_login.php';
	include "../konfig/config.php";
	
	// jika session book table tidak ada, bisa jadi user masuk langsung dengan cara ketik URL ke halaman choosetable dari browser
	// bukan dengan cara isi form di halaman reservasi
	if(!isset($_SESSION['book_table'])){
		header('Location: ' . $config['site_url'] . 'reservasi/reservation.php'); // redirect user ke halaman reservasi agar isi reservasi dulu
	}

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
									<tr>
									  <td name="tabel1"><input type="checkbox" name="meja[]" value="1"> 1</td>
									  <td name="tabel2"><input type="checkbox" name="meja[]" value="2"> 2</td>
									  <td name="tabel3"><input type="checkbox" name="meja[]" value="3"> 3</td>
									  <td name="tabel4"><input type="checkbox" name="meja[]" value="4"> 4</td>
									  <td name="tabel5"><input type="checkbox" name="meja[]" value="5"> 5</td>
									</tr>
									<tr>
									  <td name="tabel6"><input type="checkbox" name="meja[]" value="6"> 6</td>
									  <td name="tabel7"><input type="checkbox" name="meja[]" value="7"> 7</td>
									  <td name="tabel8"><input type="checkbox" name="meja[]" value="8"> 8</td>
									  <td name="tabel9"><input type="checkbox" name="meja[]" value="9"> 9</td>
									  <td name="tabel10"><input type="checkbox" name="meja[]" value="10"> 10</td>
									</tr>

									<tr>
									  <td name="tabel11"><input type="checkbox" name="meja[]" value="11"> 11</td>
									  <td name="tabel12"><input type="checkbox" name="meja[]" value="12"> 12</td>
									  <td name="tabel13"><input type="checkbox" name="meja[]" value="13"> 13</td>
									  <td name="tabel14"><input type="checkbox" name="meja[]" value="14"> 14</td>
									  <td name="tabel15"><input type="checkbox" name="meja[]" value="15"> 15</td>
									</tr>
									<tr>
									  <td name="tabel16"><input type="checkbox" name="meja[]" value="16"> 16</td>
									  <td name="tabel17"><input type="checkbox" name="meja[]" value="17"> 17</td>
									  <td name="tabel18"><input type="checkbox" name="meja[]" value="18"> 18</td>
									  <td name="tabel19"><input type="checkbox" name="meja[]" value="19"> 19</td>
									  <td name="tabel20"><input type="checkbox" name="meja[]" value="20"> 20</td>
									</tr>

									<tr>
									  <td name="tabel21"><input type="checkbox" name="meja[]" value="21"> 21</td>
									  <td name="tabel22"><input type="checkbox" name="meja[]" value="22"> 22</td>
									  <td name="tabel23"><input type="checkbox" name="meja[]" value="23"> 23</td>
									  <td name="tabel24"><input type="checkbox" name="meja[]" value="24"> 24</td>
									  <td name="tabel25"><input type="checkbox" name="meja[]" value="25"> 25</td>
									</tr>
									<tr>
									  <td name="tabel26"><input type="checkbox" name="meja[]" value="26"> 26</td>
									  <td name="tabel27"><input type="checkbox" name="meja[]" value="27"> 27</td>
									  <td name="tabel28"><input type="checkbox" name="meja[]" value="28"> 28</td>
									  <td name="tabel29"><input type="checkbox" name="meja[]" value="29"> 29</td>
									  <td name="tabel30"><input type="checkbox" name="meja[]" value="30"> 30</td>
									</tr>

									<tr>
									  <td name="tabel31"><input type="checkbox" name="meja[]" value="31"> 31</td>
									  <td name="tabel32"><input type="checkbox" name="meja[]" value="32"> 32</td>
									  <td name="tabel33"><input type="checkbox" name="meja[]" value="33"> 33</td>
									  <td name="tabel34"><input type="checkbox" name="meja[]" value="34"> 34</td>
									  <td name="tabel35"><input type="checkbox" name="meja[]" value="35"> 35</td>
									</tr>
									<tr>
									  <td name="tabel36"><input type="checkbox" name="meja[]" value="36"> 36</td>
									  <td name="tabel37"><input type="checkbox" name="meja[]" value="37"> 37</td>
									  <td name="tabel38"><input type="checkbox" name="meja[]" value="38"> 38</td>
									  <td name="tabel39"><input type="checkbox" name="meja[]" value="39"> 39</td>
									  <td name="tabel40"><input type="checkbox" name="meja[]" value="40"> 40</td>
									</tr>
									  
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