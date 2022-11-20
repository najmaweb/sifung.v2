<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $navigation[0]['url'];?>" class="nav-link"><?php echo $navigation[0]['title'];?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $navigation[1]['url'];?>" class="nav-link"><?php echo $navigation[1]['title'];?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $navigation[2]['url'];?>" class="nav-link"><?php echo $navigation[2]['title'];?> </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button class="btn btn-warning" id="btnLogout">
          <img src="/assets/vendor/adminLTE/square-up-right-solid.svg" alt="" srcset="" width="20px" height="20px">
          Keluar
        </button>
      </li>

    </ul>
  </nav>
