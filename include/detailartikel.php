<?php
  include('includes/fungsi.php');
  $batas = 2;
  if(!isset($_GET['halaman'])){
    $posisi = 0;
    $halaman = 1;
  }else{
    $halaman = $_GET['halaman'];
    $posisi = ($halaman-1) * $batas;
  }
?>
<section id="blog-header">
  <div class="container">
    <h1 class="text-white">DETAIL ARTIKEL</h1>
  </div>
</section><br><br>
<section id="blog-list">
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-9 blog-main">
        <div class="blog-post text-justify">
          <?php
            if(isset($_GET['data'])){
              $id_artikel = $_GET['data']; 
              $sql_ar = " SELECT `a`.`judul`, 
                          DATE_FORMAT(`a`.`tanggal`, '%d-%M-%Y'), `a`.`isi`, `u`.`nama`,`u`.`id_user`
                          FROM `artikel` `a` 
                          INNER JOIN `user` `u` ON `a`.`id_user` = `u`.`id_user` 
                          WHERE `a`.`id_artikel` = $id_artikel";
              $query_ar = mysqli_query($koneksi, $sql_ar);
              while($data_ar = mysqli_fetch_row($query_ar)){
                $judul = $data_ar[0];
                $tanggal = $data_ar[1];
                $isi = $data_ar[2];
                $nama = $data_ar[3];
                $id_user = $data_ar[4];
              }
            }
          ?>
          <h2 class="blog-post-title" style="color:green;"><?php echo $judul ?></h2>
          <p class="blog-post-meta"><?php echo TanggalIndo($tanggal); ?> Oleh <strong><a href="penulis-data-<?php echo $id_user; ?>" style="color:green;"><?php echo $nama; ?></a></strong></p>
          <p><?php echo $isi;?></p>
        </div><br><br><!-- /.blog-post -->
      </div><!-- /.blog-main -->

      <aside class="col-md-3 blog-sidebar">
        <div class="p-4">
          <h4 class="font-italic">Arsip Artikel</h4>
          <ol class="list-unstyled mb-0">
            <?php
              $date = " SELECT `id_artikel`, 
                        DATE_FORMAT(`tanggal`, '%m-%Y') 
                        AS `tgl` 
                        FROM `artikel` 
                        GROUP BY `tgl`";
              $query_a = mysqli_query($koneksi,$date);
              while($data_a = mysqli_fetch_row($query_a)){
                $id_b = $data_a[0];
                $tanggal = $data_a[1];
            ?>
            <li>
              <a href="daftar-artikel-arsip-data-<?php echo $tanggal; ?>" style="color:green;">
                <?php echo BulanIndo($tanggal);?>
              </a>
            </li>
            <?php } ?>
          </ol>
        </div>


      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

  </main><!-- /.container -->
</section><br><br>