<nav class="side-navbar">
      
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo $config['site_url']?>assets/admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Reza Wahyu</h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="confirm_payment.php"> <i class="icon-grid"></i>Payment</a></li>
                    <li><a href="data_user.php"> <i class="icon-user"></i>Data User </a></li>
                    <li><a href="review.php"> <i class="icon-padnote"></i>Review </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Menu </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?php echo $config['site_url'] ?>dashboard/list_menu.php">List Menu</a></li>
                        <li><a href="<?php echo $config['site_url'] ?>dashboard/tambah_menu.php#">Tambah Menu</a></li>
                        <!--<li><a href="#">Page</a></li>-->
                      </ul>
</nav>