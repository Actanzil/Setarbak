<?php
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_artikel = $_GET['data'];
      //hapus artikel
      $sql_dh = "DELETE FROM `artikel` WHERE `id_artikel` = '$id_artikel'";
      mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_artikel = $_POST["katakunci"];
    $_SESSION['katakunci_artikel'] = $katakunci_artikel;
  }
  if(isset($_SESSION['katakunci_artikel'])){
    $katakunci_artikel = $_SESSION['katakunci_artikel'];
  }else{
    unset($_SESSION['katakunci_artikel']);
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-file-pdf"></i> Artikel</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active"> Artikel</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Artikel</h3>
                    <div class="card-tools">
                      <a href="tambah-artikel" class="btn btn-sm btn-success float-right">
                      <i class="fas fa-plus"></i> Tambah Artikel</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="col-md-12">
                      <form method="POST" action="artikel">
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
                      <?php if(!empty($_GET['notif'])){ ?>
                          <?php if($_GET['notif']=="tambahberhasil"){ ?>
                            <div class="alert alert-primary" role="alert">Data Berhasil Ditambahkan
                            </div>
                            <?php } else if($_GET['notif']=="editberhasil"){ ?>
                            <div class="alert alert-primary" role="alert">Data Berhasil Diubah</div>
                          <?php } ?>
                        <?php } ?>
                    </div>
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                          <th width="5%"><center>No</center></th>
                            <th width="20%"><center>Pengarang</center></th>
                            <th width="40%"><center>Judul</center></th>
                            <th width="15%"><center>Tanggal</center></th>
                            <th width="20%"><center>Aksi</center></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $batas = 2;
                            if(!isset($_GET['halaman'])){
                              $posisi = 0;
                              $halaman = 1;
                            }else{
                              $halaman = $_GET['halaman'];
                              $posisi = ($halaman-1) * $batas;
                            }
                            $sql_g = "SELECT `a`.`id_artikel`, `u`.`nama`, `a`.`judul`, `a`.`tanggal` 
                                      FROM `artikel` `a`
                                      INNER JOIN `user` `u` ON `a`.`id_user` = `u`.`id_user`";
                            if (!empty($katakunci_artikel)){
                              $sql_g .= " WHERE `a`.`judul` LIKE '%$katakunci_artikel%'";
                            }
                            $sql_g .= " ORDER BY `u`.`nama`, `a`.`judul` limit $posisi, $batas ";
                            $query_g = mysqli_query($koneksi,$sql_g);
                            $no = $posisi+1;
                            while($data_g = mysqli_fetch_row($query_g)){
                              $id_artikel = $data_g[0];
                              $nama = $data_g[1];
                              $judul = $data_g[2];
                              $tanggal = $data_g[3];
                          ?>
                          <tr>
                            <td align="center"><?php echo $no; ?></td>  
                            <td align="center"><?php echo $nama; ?></td>
                            <td align="center"><?php echo $judul; ?></td>
                            <td align="center"><?php echo $tanggal; ?></td>
                            <td align="center">
                              <a href="detail-artikel-data-<?php echo $id_artikel; ?>"
                              class="btn btn-xs btn-primary" title="Detail"><i class="fas
                              fa-eye"></i>Detail</a>
                              <a href="edit-artikel-data-<?php echo $id_artikel; ?>"
                              class="btn btn-xs btn-warning" title="Edit"><i class="fas
                              fa-edit"></i>Edit</a>
                              <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul; ?>?')) window.location.href ='artikel-data-<?php echo $id_artikel; ?>-mode-hapus_notif-hapusberhasil'"class="btn btn-xs btn-danger"><i class="fas fa-trash"title="Hapus"></i>Hapus</a>                         
                            </td>
                          </tr>
                          <?php $no++;} ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <?php
                      //hitung jumlah semua data
                      $sql_jum = "SELECT `a`.`id_artikel`, `u`.`nama`, `a`.`judul`, `a`.`tanggal` 
                                  FROM `artikel` `a`
                                  INNER JOIN `user` `u` ON `a`.`id_user` = `u`.`id_user`";
                      if (!empty($katakunci_artikel)){
                        $sql_jum .= "WHERE `a`.`judul` LIKE '%$katakunci_artikel%'";
                      }
                      $sql_jum .= "ORDER BY `u`.`nama`, `a`.`judul`";
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
                            echo "<li class='page-item'><a class='page-link' href='artikel-halaman-1' style='color: green;'>Awal</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$sebelum' style='color: green;'>«</a></li>";
                          }
                          for($i=1; $i<=$jum_halaman; $i++){
                            if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                              if($i!=$halaman){
                                echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$i' style='color: green;'>$i</a></li>";
                              }else{
                                echo "<li class='page-item'><a class='page-link' style='color: green; font-weight: bold;'>$i</a></li>";
                              }
                            }
                          }
                          if($halaman!=$jum_halaman){
                            echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$setelah' style='color: green;'>»</a></li>";
                            echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$jum_halaman' style='color: green;'>Akhir</a></li>";
                          }
                        } ?>
                      </ul>
                    </div>  
                  </div>
                </div>
                <!-- /.card -->
        </section>