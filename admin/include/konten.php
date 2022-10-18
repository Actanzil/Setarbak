<?php
  if(isset($_POST["katakunci"])){
    $katakunci_konten = $_POST["katakunci"];
    $_SESSION['katakunci_konten'] = $katakunci_konten;
  }
  if(isset($_SESSION['katakunci_konten'])){
    $katakunci_konten = $_SESSION['katakunci_konten'];
  }else{
    unset($_SESSION['katakunci_konten']);
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-file-alt"></i> Konten</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active"> Konten</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Konten</h3>
                    <div class="card-tools">
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="col-md-12">
                      <form method="POST" action="konten">
                        <div class="row">
                            <div class="col-md-4 bottom-10">
                              <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                            </div>
                            <div class="col-md-5 bottom-10">
                              <button type="submit" class="btn btn-success"><i class="fas fa-search"></i>&nbsp; Search</button>
                            </div>
                        </div><!-- .row -->
                      </form>
                    </div><br>
                    <div class="col-sm-12">
                      <?php if(!empty($_GET['notif'])){?>
                        <?php if($_GET['notif']=="editberhasil"){ ?>
                          <div class="alert alert-primary" role="alert">
                          Data Berhasil Diubah</div>
                        <?php } ?>
                      <?php } ?>
                    </div>
                    <table class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th width="5%"><center>No</center></th>
                          <th width="20%"><center>Judul</center></th>
                          <th width="50%"><center>Isi</center></th>
                          <th width="10%"><center>Tanggal</center></th>
                          <th width="15%"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
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
                          $sql_k = "SELECT `id_konten`,`judul`, `isi`, `tanggal` 
                                    FROM `konten`";
                          if (!empty($katakunci_konten)){
                            $sql_k .= " WHERE `judul` LIKE '%$katakunci_konten%'";
                          }
                          $sql_k .= " ORDER BY `judul` limit $posisi, $batas ";
                          $query_k = mysqli_query($koneksi,$sql_k);
                          $no = $posisi+1;
                          while($data_k = mysqli_fetch_row($query_k)){
                            $id_konten = $data_k[0];
                            $judul = $data_k[1];
                            $isi = $data_k[2];
                            $tanggal = $data_k[3];
                        ?>
                        <tr>
                          <td align="center"><?php echo $no; ?></td>
                          <td align="center"><?php echo $judul; ?></td>
                          <td><?php echo limit_text($isi,50); ?></td>
                          <td align="center"><?php echo $tanggal; ?></td>
                          <td align="center">
                            <a href="detail-konten-data-<?php echo $id_konten; ?>" class="btn btn-xs btn-primary" title="Detail"><i class="fas fa-eye"></i>Detail</a>
                            <a href="edit-konten-data-<?php echo $id_konten; ?>" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i>Edit</a>
                          </td>
                        </tr>
                        <?php $no++; } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <?php
                    //hitung jumlah semua data
                    $sql_jum = "SELECT `id_konten`, `judul`, `isi`, `tanggal` 
                                FROM `konten` ";
                    if (!empty($katakunci_konten)){
                      $sql_jum .= " WHERE `judul` LIKE '%$katakunci_konten%'";
                    }
                    $sql_jum .= " ORDER BY `judul`";
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
                        echo "<li class='page-item'><a class='page-link' style='color: green;'>1</a></li>";
                      }else{
                        $sebelum = $halaman-1;
                        $setelah = $halaman+1;
                        if($halaman!=1){
                          echo "<li class='page-item'><a class='page-link' href='konten-halaman-1' style='color: green;'>Awal</a></li>";
                          echo "<li class='page-item'><a class='page-link' href='konten-halaman-$sebelum' style='color: green;'>«</a></li>";
                        }
                        for($i=1; $i<=$jum_halaman; $i++){
                          if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                            if($i!=$halaman){
                              echo "<li class='page-item'><a class='page-link' href='konten-halaman-$i' style='color: green;'>$i</a></li>";
                            }else{
                              echo "<li class='page-item'><a class='page-link' style='color: green; font-weight: bold;'>$i</a></li>";
                            }
                          }
                        }
                        if($halaman!=$jum_halaman){
                          echo "<li class='page-item'><a class='page-link' href='konten-halaman-$setelah' style='color: green;'>»</a></li>";
                          echo "<li class='page-item'><a class='page-link' href='konten-halaman-$jum_halaman' style='color: green;'>Akhir</a></li>";
                        }
                      } ?>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->
        </section>