<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand">
      <img src="images/logosetarbak.png" width="26" height="26" class="d-inline-block align-top" alt="" loading="lazy">
      <b>SETARBAK</b> Coffee
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
      aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Menu</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <?php 
              $sql_k = "SELECT `id_kategori_produk`,`kategori_produk` 
                        FROM `kategori_produk` 
                        ORDER BY `kategori_produk`";
              $query_k = mysqli_query($koneksi, $sql_k);
              while($data_k = mysqli_fetch_row($query_k)){
                $id_kat = $data_k[0];
                $nama_kat = $data_k[1];
            ?>
              <a class="dropdown-item btn-success" href="daftar-produk-kategori-data-<?php echo $id_kat; ?>"><?php echo $nama_kat; ?></a>
            <?php } ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artikel">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang-kami">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>