<?php 
  include "../konfig/config.php";
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once "../konfig/koneksi.php";


if(isset($_GET['id_menu'])){
    $id = $_GET['id_kategori'];
	$edit_query = $db->query("select * from menu where id_kategori='$id'") or die(mysqli_error());
	$edit_row = mysqli_fetch_assoc($edit_query);
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

                    <div class="booking_left"><a href="">Semua Kategori</a></div>
                    <div class="clearfix"></div>

                    <?php
                        $menu_query = $link->query("select * from `kategori`") or die(mysqli_error());
                        while($menu_row = mysqli_fetch_assoc($menu_query)){
                            echo '<div class="booking_left"><a href="#'.$menu_row['jenis_kategori'].'">'.$menu_row['jenis_kategori'].'</a></div>';
                            echo '<div class="clearfix"></div>';
                        }
                    ?>
                </div>

                <div class="col-md-9" style="text-align:left;">
                    <h3>Menu</h3>
                </div>
            </div>
        </div>
	</section>

    <!-- Footer -->
    <?php include '../includes/user/footer.php'?>
    

    <?php include '../includes/user/js.php'?>

</body>
</html>