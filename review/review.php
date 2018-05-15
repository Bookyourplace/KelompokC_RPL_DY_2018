<?php  
session_start();
    include '../konfig/config.php';
    require_once "../konfig/koneksi.php"; ?>

<?php
	if (isset($_POST["send"])){
        var_dump($_SESSION);
        $username = $_SESSION['login_user'];
        //$username = htmlentities(strip_tags($_POST["username"]));
        $comment = htmlentities(strip_tags($_POST["comment"]));

        $syntax="INSERT into review (username, comment) values('$username', '$comment')";
        $link->query($syntax) or die(mysqli_error($link));
        
        header('location: review.php');
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Review</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        form-coment {
        margin : 1000px auto;
        }


       
}
    </style>


    <?php include '../includes/user/css.php'?>

</head>


<body>

<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo $config['site_url'] ?>" >
							<img src="<?php echo $config['site_url']?>assets/users/images/icons/logo1.png" alt="IMG-LOGO" data-logofixed="<?php echo $config['site_url'] ?>assets/users/images/icons/logo2-1.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
							
								<li>
									<a href="<?php echo $config['site_url'] ?>index.php">Home</a>
								</li>

								<li>
									<a href="<?php echo $config['site_url'] ?>reservasi/reservation.php">Reservation</a>
								</li>

								<li>
									<a href="<?php echo $config['site_url'] ?>menu/menu.php">Menu</a>
								</li>			

								<li>
									<a href="<?php echo $config['site_url'] ?>about/about.php">About</a>
								</li>

								<li>
									<a href="<?php echo $config['site_url'] ?>review/review.php">Review</a>
								</li>

								<li>
									<a href="<?php echo $config['site_url'] ?>auth/login.php">Login</a>
								</li>
								<li>
									<a href="<?php echo $config['site_url'] ?>auth/logout.php">Log Out</a>
									<!-- kalok bisa tambahin syarat kalok blm login, gada tombol logout -->
								</li>
							</ul>
						</nav>
					</div>
					</div>
				</div>
			</div>
		</div>
	</header>


<!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/review.jpg);">
		<h2 style= "color:black;" class="tit6 t-center">
			Customer Review
    </section>
        
<?php   
   /*$syntax="SELECT username, comment from review order by id_review";
    $data= $link->query($syntax) or die(mysqli_error($link));
    if ($data){
    $cnt=0;
        while ($row = mysqli_fetch_assoc($data)){
            $username = $row["username"];
            $comment = $row["comment"]; 
            echo "<div>$username : $comment</div>";
        }
        
    }*/
        
?>

    <div class="col-7 form-coment">
    <form action="review.php" method="POST">
        <div class="form-group">

        <div class="form-group">
            <textarea name="comment" placeholder="Write your comment here!" class="form-control" align="center"></textarea><br>
        </div>
        <div class="form-group">
        <input type="submit" name="send" value="Send" class="btn btn-default" align="center">
    </form>
    </div>  
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







</body>
</html>