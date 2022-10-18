<section id="blog-header">
  <div class="container">
    <h1 class="text-white">DETAIL PRODUK</h1>
  </div>
</section><br><br>
<section id="setarbak-wrapper">
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-9 setarbak-detail">
        <div class="card-responsive">
          <?php
            if(isset($_GET['data'])){
              $id_produk = $_GET['data'];
              $sql_p = "SELECT `p`.`nama`,`p`.`gambar`,`p`.`kalori`,`p`.`kolesterol`,`p`.`karbohidrat`,`p`.`protein`,`p`.`kafein`,`p`.`harga`,`p`.`deskripsi`,
                                `p`.`komposisi`,`p`.`id_kategori_produk`,`kp`.`kategori_produk`
                        FROM `produk` `p`
                        INNER JOIN `kategori_produk` `kp` ON `p`.`id_kategori_produk` = `kp`.`id_kategori_produk`
                        WHERE `p`.`id_produk`='$id_produk'";
              $query_p = mysqli_query($koneksi,$sql_p);
              while($data_p = mysqli_fetch_row($query_p)){
                $nama = $data_p[0];
                $gambar = $data_p[1];
                $kalori = $data_p[2];
                $kolesterol = $data_p[3];
                $karbohidrat = $data_p[4];
                $protein = $data_p[5];
                $kafein = $data_p[6];
                $harga = $data_p[7];
                $deskripsi = $data_p[8];
                $komposisi = $data_p[9];
                $id_kategori_produk = $data_p[10];
                $kategori_produk = $data_p[11];
              }
          ?>
          <h5 class="card-header">
            <?php echo $nama; ?>
          </h5>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="admin/gambar/<?php echo $gambar; ?>" class="img-fluid" alt="<?php echo $nama; ?>" title="<?php echo $nama; ?>">
              </div>
              <div class="col-md-6">
                <table class="table">
                  <tr>
                    <td width="20%">Kalori</td>
                    <td width="40%"><?php echo $kalori; ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Kolesterol</td>
                    <td width="40%"><?php echo $kolesterol; ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Karbohidrat</td>
                    <td width="40%"><?php echo $karbohidrat; ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Protein</td>
                    <td width="40%"><?php echo $protein; ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Kafein</td>
                    <td width="40%"><?php echo $kafein; ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Harga</td>
                    <td width="40%">
                      <div class="btn btn-sm btn-success"><strong><?php echo $harga; ?></strong></div>
                    </td>
                  </tr>
                </table>
              </div>
              <table class="table">
                <tr>
                  <td width="20%">Informasi deskripsi</td>
                  <td width="80%" style="text-align: justify;"><?php echo $deskripsi; ?></td>
                </tr>
                <tr>
                  <td width="20%">Komposisi</td>
                  <td width="80%" style="text-align: justify;"><?php echo $komposisi; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div><!-- /.blog-main -->

      <aside class="col-md-3 katalog-sidebar">
        <div class="pl-2 pb-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
              <li class="breadcrumb-item"><a href="index.php?include=daftar-produk-kategori&data=<?php echo $id_kategori_produk; ?>" style="color:green;"><?php echo $kategori_produk; ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $nama; ?></li>
            </ol>
          </nav>
        </div>
      </aside><!-- /.blog-sidebar -->
      <?php } ?>

    </div><!-- /.row -->

  </main><!-- /.container -->
</section><br><br>