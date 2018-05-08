<?php 
  include "../konfig/config.php";
?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once "../konfig/koneksi.php";


//Edit Query
if(isset($_GET['id_menu'])){
    $id = $_GET['id_kategori'];
	$edit_query = $db->query("select * from menu where id_kategori='$id'") or die(mysqli_error());
	$edit_row = mysqli_fetch_assoc($edit_query);
}
?>