<?php
  session_start();
  include '../konfig/config.php'; 
  require '../konfig/koneksi.php';
  //var_dump($_POST);

  if (!empty($_POST)) {
    $id_menu = htmlentities(strip_tags($_POST['id_menu']));
    $nama_menu = htmlentities(strip_tags($_POST['nama_menu']));
    $id_kategori = htmlentities(strip_tags($_POST['id_kategori']));
    $harga = htmlentities(strip_tags($_POST['harga']));

    $sql = "INSERT INTO menu(id_menu, nama_menu, id_kategori, harga) values('$id_menu', '$nama_menu', '$id_kategori', '$harga')";
    $status = mysqli_query($link, $sql);


    if ($status) {
      $_SESSION['status_proses'] = "Menu Berhasil ditambahkan.";
    }else{
      $_SESSION['status_proses'] = "Menu Gagal ditambahkan: ".mysqli_error($link);
    }

    header('Location:list_menu.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BookYourPlace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <!--css-->
    <?php include '../includes/admin/css.php'; ?>
</head>
<body>
    <div class="page"> 
        <!--header-->
        <?php include '../includes/admin/header.php'?>
        <!--class untuk buat letak tulisan dalam nya teratur-->
        <div class="page-content d-flex align-items-stretch"> 
        
        <!--sidebar-->
        <?php include '../includes/admin/sidebar.php'?>

        <div class="content-inner">
            <!-- page header-->
            <header class="page-header">
                <div class="container-fluid">
                <h2 class="no-margin-bottom">Tambah Menu</h2>   
                </div>
            </header>
            <!-- Breadcrumb (buat kayak ada reverse nya gitu-->
            <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $config['site_url']?>dashboard/list_menu.php">Menu</a></li>
                    <li class="breadcrumb-item active">Tambah Menu            </li>
                    </ul>
            </div>
                <!-- Container fluid  -->
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <div class="container-fluid">
                </div>
        </div>
    </div>

    <?php include '../includes/admin/footer.php'?>


    <?php include '../includes/admin/js.php'?>
</body>
</html>