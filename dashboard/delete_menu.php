<?php
session_start();
require '../konfig/koneksi.php';

  if (!isset($_GET['id_menu'])) {
    echo "Not Found";
    die();
  }

  $sql = "delete from menu where id_menu=" . $_GET['id_menu'];
  $status = mysqli_query($link, $sql);

  if ($status) {
    $_SESSION['status_proses'] = "Menu Berhasil dihapus.";
  }else{
    $_SESSION['status_proses'] = "Menu Gagal dihapus.";
  }

  header('Location:list_menu.php');


?>
