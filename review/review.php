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

    <?php include '../includes/user/header.php'?>
    <?php include '../includes/user/sidebar.php'?>


<!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?php echo $config['site_url']?>assets/users/images/review.jpg);">
		<h2 style= "color:white;" class="tit6 t-center">
			Customer Review
    </section>
        
<section class="bg1-pattern p-t-120 p-b-150">  
<?php   
   $syntax="SELECT username, comment from review order by id_review";
    $data= $link->query($syntax) or die(mysqli_error($link));
    if ($data){
    $cnt=0;
        while ($row = mysqli_fetch_assoc($data)){
            $username = $row["username"];
            $comment = $row["comment"]; 
            echo "<div style=' padding: 1px 0px;
            margin:0 auto;
            margin-top:1px;
            width:250px; 
            font-family: Monotype Corsiva;
            font-size: 28px;
            color: black;
            text-align:center;
            '>{$username}</div>";
            echo "<div style='border: 2px solid rgba(0,0,0,0.8);
            margin:0 auto;
		    margin-top:1px;
            width:500px; 
            padding: 15px;
            cursor: pointer;
            background: -webkit-linear-gradient(top, #efefef, #ddd);
            background: -moz-linear-gradient(top, #efefef, #ddd);
            background: -ms-linear-gradient(top, #efefef, #ddd);
            background: -o-linear-gradient(top, #efefef, #ddd);
            background: linear-gradient(top, #efefef, #ddd);
            color: #333;
            font-family: cambria;
            '>{$comment}</div><br />";
        }
        
    }

?>
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container" style="padding:60px 0px">
        <div class="row">
            <div class="col-12 form-coment">
                <form action="review.php" method="POST">
                    <div class="form-group">

                        <div class="form-group">
                            <textarea name="comment" placeholder="Write your comment here!" class="form-control" align="center" style="margin-top: 0px; margin-bottom: 0px; height: 300px;"></textarea><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" value="Send" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" align="center">
                        </div>
                    </div>
                </form>
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

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<?php include '../includes/user/js.php'?>






</body>
</html>