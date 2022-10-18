  <?php
    include('includes/fungsi.php');
    function limit_text($text, $limit)
    {
        if (str_word_count($text, 0)>$limit) {
            $words = str_word_count($text, 2);
            $pos  = array_keys($words);
            $text  = substr($text, 0, $pos[$limit]) . '...';
    
        }
        return $text;
    }
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
      <h1 class="text-white">ARTIKEL</h1>
    </div>
  </section><br><br>
  <section id="blog-list">
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-9 blog-main">
          <?php
            $sql_ar = " SELECT `a`.`id_artikel`,`a`.`judul`, 
                        DATE_FORMAT(`a`.`tanggal`, '%d-%m-%Y'),`u`.`nama`, `a`.`isi`, `u`.`id_user` 
                        FROM `artikel` `a` 
                        INNER JOIN `user` `u` ON `a`.`id_user`=`u`.`id_user`";
            $sql_ar .= "ORDER BY `a`.`tanggal` LIMIT $posisi, $batas";
            $query_ar = mysqli_query($koneksi,$sql_ar);
            while ($data_ar = mysqli_fetch_row($query_ar)) {
              $id_artikel = $data_ar[0];
              $judul_artikel = $data_ar[1];
              $tanggal_artikel = $data_ar[2];
              $nama_artikel = $data_ar[3];
              $isi_artikel = $data_ar[4];
              $id_user = $data_ar[5];
          ?>
          <div class="blog-post text-justify">
            <h2 class="blog-post-title text-success"><?php echo $judul_artikel; ?></h2>
            <p class="blog-post-meta"><?php echo TanggalIndo($tanggal_artikel); ?>
              Oleh <strong><a href="penulis-data-<?php echo $id_user; ?>" style="color : green;"><?php echo $nama_artikel; ?></a></strong>
            </p>
            <!--<img src="slideshow/slide-1.jpg" class="img-fluid" alt="Responsive image"><br><br>-->

            <p>
              <?php echo limit_text($isi_artikel,50); ?>
            </p>
            <a href="detail-artikel-data-<?php echo $id_artikel; ?>" class="btn btn-sm btn-success">Baca Lebih Banyak</a>
          </div><!-- /.blog-post --><br><br>
          <?php } ?>

          <?php
            //hitung jumlah semua data
            $sql_jum = "SELECT `a`.`id_artikel`,`a`.`judul`, 
                        DATE_FORMAT(`a`.`tanggal`, '%d-%M-%Y'),`u`.`nama`, `a`.`isi`, `u`.`id_user` 
                        FROM `artikel` `a` 
                        INNER JOIN `user` `u` ON `a`.`id_user`=`u`.`id_user`";
            $sql_jum .= " order by `a`.tanggal";
            $query_jum = mysqli_query($koneksi,$sql_jum);
            $jum_data = mysqli_num_rows($query_jum);
            $jum_halaman = ceil($jum_data/$batas);
          ?>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <?php
                if($jum_halaman==0){
                  //tidak ada halaman
                }else if($jum_halaman==1){
                  echo "<li class='page-item'><a class='page-link' style='color : green;'>1</a></li>";
                }else{
                  $sebelum = $halaman-1;
                  $setelah = $halaman+1;
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='artikel-halaman-1' style='color : green;'>Awal</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$sebelum' style='color : green;'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                    if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                      if($i!=$halaman){
                        echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$i' style='color : green;'>$i</a></li>";
                      }else{
                        echo "<li class='page-item'><a class='page-link' style='color: green; font-weight: bold;'>$i</a></li>";
                      }
                    }
                  }
                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$setelah' style='color : green;'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$jum_halaman' style='color : green;'>Akhir</a></li>";
                  }
                }?>
            </ul>
          </div>
        </div><!-- /.blog-main -->
        <aside class="col-md-3 blog-sidebar">
          <div class="p-4">
            <h4 class="font-italic">Arsip Artikel</h4>
            <ol class="list-unstyled mb-0">
              <?php
                $date= "SELECT `id_artikel`, 
                        DATE_FORMAT(`tanggal`, '%m-%Y') 
                        AS `tgl` 
                        FROM `artikel` 
                        GROUP BY `tgl`";
                $query_a = mysqli_query($koneksi,$date);
                while($data_a = mysqli_fetch_row($query_a)){
                  $id_artikel = $data_a[0];
                  $tanggal = $data_a[1];
              ?>
              <li>
                <a href="daftar-artikel-arsip-data-<?php echo $tanggal; ?>" style='color : green;'>
                  <?php echo BulanIndo($tanggal); ?>
                </a>
              </li>
              <?php } ?>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      
    </main><!-- /.container -->

  </section><br><br>