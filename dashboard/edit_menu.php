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
</head>
<body>
</body>
</html>