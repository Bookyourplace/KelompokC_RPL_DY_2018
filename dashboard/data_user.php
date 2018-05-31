<?php
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
                <h2 class="no-margin-bottom">Semua User</h2>
            </div>   
        </header>
        
        <!-- Breadcrumb-->
      <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Semua User           </li>
            </ul>
      </div> 

      <br></br>

      <?php
      if (isset($_SESSION['status_proses'])) {
        echo "<div><strong>$_SESSION[status_proses]</strong></div>";
        unset($_SESSION['status_proses']);
      ?>

      <div class="container-fluid" align="center" style="width:70%" >
      <div class="row">
          <div class="col-md-12" style="margin:0 auto">
              <div class="card">
                  <div class="card-body">
                      <table class="table" >
                      <thead>
                      <br></br><br></br>
                      <tr align="center" height="50">
                      <th>No</th>
                      <th>Username</th>
                      <th>email</th>
                      <th style="width:50px">No Hp</th>        
                      </tr>
                  </thead>

                  <tbody>
                            <?php
                            for ($i = 1; $row = mysqli_fetch_assoc($data); $i++) :
                            ?>
                            <tr>
                                <td col width="50" align="center"><?php echo $i; ?></td>
                                <td col width="180" align="left"><?php echo $row['username']; ?></td>
                                <td col width="180" align="left"><?php echo $row['email']; ?></td>
                                <td align="left"><?php echo $row['no_hp']; ?></td>     
                            </tr>

                            <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/admin/footer.php'?>

    </div>
  </div>
</div>
