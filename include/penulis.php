<section id="blog-header">
  <div class="container">
    <h1 class="text-white">DETAIL PENULIS</h1>
  </div>
</section><br><br>
<section id="setarbak-wrapper">
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-9 setarbak-detail">
        <div class="card-responsive">
          <?php
            if(isset($_GET['data'])){
              $id_user = $_GET['data'];
              $sql_us = "SELECT `nama`,`foto`,`email`,`username`,`level`
                        FROM `user`
                        WHERE `id_user`='$id_user'";
              $query_us = mysqli_query($koneksi,$sql_us);
              while($data_us = mysqli_fetch_row($query_us)){
                $nama = $data_us[0];
                $foto = $data_us[1];
                $email = $data_us[2];
                $username = $data_us[3];
                $level = $data_us[4];
              }
          ?>
          <h5 class="card-header">
            <?php echo $nama; ?>
          </h5>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="admin/foto/<?php echo $foto; ?>" class="img-fluid" alt="<?php echo $nama; ?>" title="<?php echo $nama; ?>">
              </div>
              <div class="col-md-9">
                <table class="table">
                  <tr>
                    <td width="15%">Username</td>
                    <td width="45%"><?php echo $username; ?></td>
                  </tr>
                  <tr>
                    <td width="15%">e-Mail</td>
                    <td width="45%"><?php echo $email; ?></td>
                  </tr>
                  <tr>
                    <td width="15%">Level</td>
                    <td width="45%"><?php echo $level; ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div><!-- /.blog-main -->

      <aside class="col-md-3 katalog-sidebar">
        <div class="pl-2 pb-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
              <li class="breadcrumb-item"><a href="artikel" style="color:green;">Artikel</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $nama; ?></li>
            </ol>
          </nav>
        </div>
      </aside><!-- /.blog-sidebar -->
      

    </div><!-- /.row -->

  </main><!-- /.container -->
</section><br><br>