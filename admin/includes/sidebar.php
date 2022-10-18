<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="icon/logosetarbak.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Admin</b>Setarbak</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profil" class="nav-link">
              <i class="nav-icon fas fa-portrait"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kategori-produk" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>Kategori Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="konten" class="nav-link">
              <i class="nav-icon fas fa-file-word"></i>
              <p>Konten</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="produk" class="nav-link">
              <i class="nav-icon fas fa-coffee"></i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="artikel" class="nav-link">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>Artikel</p>
            </a>
          </li>
          <?php
            if (isset($_SESSION['level'])){
              if ($_SESSION['level']=="Superadmin"){ ?>
                <li class="nav-item">
                  <a href="user" class="nav-link">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>Pengaturan User</p>
                  </a>
                </li>
              <?php } ?>
            <?php } ?>
          <li class="nav-item">
            <a href="signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sign Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>