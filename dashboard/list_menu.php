<?php
  session_start();
  include '../konfig/config.php'; 
  require '../konfig/koneksi.php';

  if (!isset($_SESSION['login_user']))
    header('Location:../login.php');

  $sql = "SELECT * FROM menu";
  $data = mysqli_query($link, $sql);
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

            <div class="page-content d-flex align-items-stretch"> 

            <!--sidebar-->
            <?php include '../includes/admin/sidebar.php'?>
        
            <div class="content-inner">
                <!-- page header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">List Menu</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">List Menu            </li>
                    </ul>
                </div>
                <br>

                <!--alert utk notifikasi berhasil atau enggak-->
                <?php
                    if (isset($_SESSION['status_proses'])) {
                    echo ' <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>';
                    echo "<div><strong>$_SESSION[status_proses]</strong></div>";
                    echo "</div>";
                    unset($_SESSION['status_proses']);
                    }
                ?>

                <div>
                    <table align="center" border="5"  cellpadding="3" style="width:60%" >
                        <thead>
                            <tr align="center" height="80" style="background-color: white;">
                            <th style="width:55px">No</th>
                            <th>Id Menu</th>
                            <th>Nama Menu</th>
                            <th>Id Kategori</th>
                            <th>Harga</th>
                            <th style="width:150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $row = mysqli_fetch_assoc($data); $i++) :
                            ?>
                            <tr>
                                <td align="center"><?php echo $i; ?></td>
                                <td align="center"><?php echo $row['id_menu']; ?></td>
                                <td ><?php echo $row['nama_menu']; ?></td>
                                <td align="center"><?php echo $row['id_kategori']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td>            
                                    <div class="btn-group btn-group-justified">
                                        <a href="edit_menu.php?id_menu=<?php echo $row['id_menu'] ?>" class="btn btn-link ">Edit</a>              
                                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_menu.php?id_menu=<?php echo $row['id_menu'] ?>" class="btn btn-link">Hapus</a></td>
                                    </div>     
                            </tr>
                    
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>      
                </div>
                <br>
                <br>
                <div><table border="1" style="width:100%">

                
                <?php include '../includes/admin/footer.php'?> 
                </div>
            </div>
        </div>
                     
        <?php include '../includes/admin/js.php'?>
    </body>
 </html>