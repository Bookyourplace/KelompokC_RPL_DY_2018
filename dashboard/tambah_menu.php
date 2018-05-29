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

    $syntax=sprintf("select id_kategori from kategori where jenis_kategori='%s'",$id_kategori);     
    $query=mysqli_query($link,$syntax)
    $tes;

    if(mysqli_num_rows($query)>0){
        while($data=mysqli_fetch_array($query)){
            $tes=$data["id_kategori"];
            //echo $tes;
        }
    }

    //$sql = "INSERT INTO menu(id_menu, nama_menu, id_kategori, harga) values('$id_menu', '$nama_menu', '$id_kategori', '$harga')";
    
    $sql =sprintf("INSERT INTO menu(id_menu, nama_menu, id_kategori, harga) values('%s', '%s', '%s', '%s')",$id_menu, $nama_menu, $tes,$harga);
    $status = mysqli_query($link, $sql);


    if ($status) {
      $_SESSION['status_proses'] = "Menu Berhasil ditambahkan.";
    }else{
      $_SESSION['status_proses'] = "Menu Gagal ditambahkan: ".$sql."id".$tes."sy".$syntaxKategori;
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
                    <!-- Start Page Content -->
                    <div class="row">
                        <div class="col-9" style="margin:0 auto">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="basic-form">
                                        <form class="" action="tambah_menu.php" method="post">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label">Id menu</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="id_menu" id="id_menu" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label">Nama menu</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nama_menu"  id="nama_menu" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label">Id Kategori</label>
                                                    <div class="col-sm-9">
                                                        <select class="selection-1" name="id_kategori">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label">Harga</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">Rp</span>
                                                            <input type="text" placeholder="Price" name="harga" id="harga" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <button type="submit" value="submit" class="btn btn-primary" style="background: #222222ef">
                                                    Tambah Menu
                                                </button>
                                            </div>   
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End PAge Content -->
                </div>
                <!-- End Container fluid  --> 

    <?php include '../includes/admin/footer.php'?>

    <?php include '../includes/admin/js.php'?>
</body>
</html>