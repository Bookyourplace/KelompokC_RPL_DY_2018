<?php session_start();
  require '../konfig/koneksi.php';
  include '../konfig/config.php'; 
  
  if (!isset($_GET['id_menu'])) {
    echo "Not Found";
    die();
  }
  
  
  if (isset($_POST['submit'])) {
    $nama_menu = htmlentities(strip_tags($_POST['nama_menu']));
    $harga = htmlentities(strip_tags($_POST['harga']));

    $sql = "update menu set nama_menu='$nama_menu', harga='$harga' where id_menu=$_GET[id_menu]";
    $status = mysqli_query($link, $sql);
  
    if ($status) {
      $_SESSION['status_proses'] = "Menu Berhasil diedit.";
    }else{
      $_SESSION['status_proses'] = "Menu Gagal diedit.".mysqli_error($link);;
    }

    header('Location: list_menu.php');
  }


  $sql = "SELECT*from menu where id_menu=" . $_GET['id_menu'];
  $data = mysqli_query($link, $sql);
  $data = mysqli_fetch_assoc($data);

  if (empty($data)) {
    echo "Not Found";
    die();
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
                <h2 class="no-margin-bottom">Edit Menu</h2>   
            </div>
       </header>
       <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo $config['site_url']?>dashboard/list_menu.php">Menu</a></li>
              <li class="breadcrumb-item active">Edit Menu            </li>
            </ul>
       </div>
       
       <!-- Container fluid  -->
       <br></br>
       <br></br>
      
       <div class="container-fluid">
       <!-- Start Page Content -->
            <div class="row">
                <div class="col-9" style="margin:0 auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="" action="edit_menu.php?id_menu=<?php echo $_GET['id_menu']; ?>" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label" for="nama_menu">Nama menu</label><br>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="<?php echo $data['nama_menu']; ?>"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label" for="harga">Harga menu</label><br>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">Rp</span>
                                                    <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $data['harga']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary" style="background: #222222ef">
                                            Update
                                        </button>
                                    </div>         
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
       </div>

<?php include '../includes/admin/footer.php'?>

<?php include '../includes/admin/js.php'?>
</body>
</html>