  <?php 
    
    $sql_k = "SELECT `isi`
              FROM `konten` 
              WHERE `id_konten`='2'";
    $query_k = mysqli_query($koneksi,$sql_k);
    while($data_k = mysqli_fetch_row($query_k)){;
      $isi_konten = $data_k[0];
    }
  ?>
  <section id="blog-header">
    <div class="container">
      <h1 class="text-white">TENTANG KAMI</h1>
    </div>
  </section><br><br>
  <section id="blog-list">
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-11 blog-main">
          <div class="blog-post text-justify">
            <?php echo $isi_konten; ?>
          </div><br><br><!-- /.blog-post -->
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </main><!-- /.container -->
  </section><br><br>