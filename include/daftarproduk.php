
  <section id="blog-header">
    <div class="container">
      <h1 class="text-white">DAFTAR PRODUK</h1>
    </div>
  </section><br><br>

  <section id="katalog-item">
    <main role="main" class="container">
      <?php 
        if(isset($_GET['include'])){
          $include = $_GET['include'];
          if(isset($_GET['data'])){
            $data = $_GET['data'];
            if($include=='daftar-produk-kategori'){
              $sql = "SELECT `kategori_produk` 
                      FROM `kategori_produk` 
                      WHERE `id_kategori_produk` = '$data'";
            }
            $query = mysqli_query($koneksi, $sql);
            while($data_b = mysqli_fetch_row($query)){
              $nama = $data_b[0];
            }
          }
        }
      ?>
      <h2 class="text-success">
        <?php
          if($include=='daftar-produk-kategori'){ 
            echo "";
          }
        ?>
        <?php echo $nama; ?>
      </h2><br><br>
      <div class="row">
        <div class="col-md-9 katalog-main">
          <div class="row">
            <?php 
              $include = $_GET['include'];
              $data = $_GET['data'];
              if($include=='daftar-produk-kategori'){
                include('kategori.php');
              }
            ?>
          </div><!-- .row-->
        </div><!-- /.katalog-main -->

        <aside class="col-md-3 katalog-sidebar">
          <div class="pl-4 pb-4">
            <h4 class="font-italic">Kategori Produk</h4>
            <ol class="list-unstyled mb-0">
              <?php 
                  $sql_k = "SELECT `id_kategori_produk`,`kategori_produk` 
                            FROM `kategori_produk` 
                            ORDER BY `kategori_produk`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                    $id_kat = $data_k[0];
                    $nama_kat = $data_k[1];
                ?>
                <li>
                  <a href="daftar-produk-kategori-data-<?php echo $id_kat; ?>" style='color: green;'><?php echo $nama_kat; ?></a>
                </li>
              <?php } ?>
          </div>
        </aside> <!-- /.katalog-sidebar -->
      </div><!-- /.row -->
    </main><!-- /.container -->
  </section><br><br>