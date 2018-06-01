<?php
    session_start();
    include '../konfig/config.php'; 
    require '../konfig/koneksi.php';

    if (!isset($_SESSION['login_user']))
        header('Location:../login.php');

    if(isset($_POST['submit'])){
        $id_pesanan = $_GET['id_pesanan'];
        $total = $_POST['total'];
        // $yang_dibayar = $_POST['yang_dibayar'];

        $sql = "insert into payment(id_pesanan, total_harga) values($id_pesanan, $total)";
        $data = mysqli_query($link, $sql);

        header("Location: confirm_payment.php?notif=1");
    }

    if(!isset($_GET['id_pesanan']))
        header('Location:' . $config['site_url'] . 'dashboard/confirm_payment.php');

    $id_pesanan = $_GET['id_pesanan'];
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
                        <h2 class="no-margin-bottom">Detail Pembayaran</h2>
                    </div>
                </header>

                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="confirm_payment.php">Pembayaran</a></li>
                    <li class="breadcrumb-item active">Detail Pembayaran</li>
                    </ul>
                </div>
                <br>

                <div class="container">
                    <div class="text-center">
                        <h1>Pesanan <?php echo $id_pesanan; ?></h1>
                        <br>
                    </div>

                    <table class="table" align="center" border="5" cellpadding="3" width="70%">
                    <thead>
                    <tr align="center" height="80">
                    <th>No</th>
                    <th>Orders</th>
                    <th>Price</th>
                    <th>Quant</th>
                    <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT menu_pesanan.quant, menu_pesanan.harga_pesanan_persatuan, menu.nama_menu, (menu_pesanan.quant * menu_pesanan.harga_pesanan_persatuan) as amount FROM `menu_pesanan` join menu on menu.id_menu = menu_pesanan.id_menu where id_pesanan = $id_pesanan";
                            $data = mysqli_query($link, $sql);
                            $total = 0;

                            for ($i=1; $row = mysqli_fetch_assoc($data); $i++) {
                                $total += $row['amount'];
                        ?>
                            <tr>
                                <td align="center"><?php echo $i; ?>.</td>
                                <td><?php echo $row["nama_menu"]; ?></td>
                                <td>Rp <?php echo str_replace(",", ".", number_format($row['harga_pesanan_persatuan'])); ?></td>
                                <td><?php echo $row['quant'] ?></td>
                                <td>Rp <?php echo str_replace(",", ".", number_format($row['amount'])) ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                   
                        
                    </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <form method="post">
                                <div class="form-group">
                                    <label for="total-yang-harus-dibayar">Total Yang Harus Dibayar</label>
                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    <input type="text" name="total_yang_harus_dibayar" value="<?php echo $total ?>" class="form-control" id="total-yang-harus-dibayar" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="yang-dibayar">Yang Dibayar</label>
                                    <input type="text" onkeyup="updateKembalian()" name="yang_dibayar" class="form-control" id="yang-dibayar">
                                </div>
                                <div class="form-group">
                                    <label for="kembalian">Kembalian</label>
                                    <input type="text" name="kembalian" class="form-control" id="exampleInputPassword1" disabled>
                                </div>

                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">Bayar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<br>
<?php include '../includes/admin/footer.php'?>
<?php include '../includes/admin/js.php'?>

<script>
    function updateKembalian(){
        var totalHarga = <?php echo $total ?>;
        var yangDibayar = $('input[name=yang_dibayar]').val();
        var kembalian = yangDibayar - totalHarga;
        $('input[name=kembalian]').val(kembalian);
    }
</script>
</body>
</html>