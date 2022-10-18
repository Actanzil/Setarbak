<?php
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_produk = $_GET['data'];
      //hapus produk
      $sql_dh = "DELETE FROM `produk` WHERE `id_produk` = '$id_produk'";
      mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_produk = $_POST["katakunci"];
    $_SESSION['katakunci_produk'] = $katakunci_produk;
  }
  if(isset($_SESSION['katakunci_produk'])){
    $katakunci_produk = $_SESSION['katakunci_produk'];
  }else{
    unset($_SESSION['katakunci_produk']);
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-coffee"></i> Produk</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">Produk</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Produk</h3>
              <div class="card-tools">
                <a href="tambah-produk" class="btn btn-sm btn-success float-right">
                  <i class="fas fa-plus"></i> Tambah Produk</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-md-12">
                <form method="POST" action="produk">
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
                    <div class="alert alert-primary" role="alert">Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){ ?>
                    <div class="alert alert-primary" role="alert">Data Berhasil Diubah</div>
                  <?php } ?>
                <?php }?>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="5%">
                      <center>No</center>
                    </th>
                    <th width="15%">
                      <center>Kategori</center>
                    </th>
                    <th width="15%">
                      <center>Nama</center>
                    </th>
                    <th width="30%">
                      <center>Komposisi</center>
                    </th>
                    <th width="15%">
                      <center>Harga</center>
                    </th>
                    <th width="20%">
                      <center>Aksi</center>
                    </th>
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
                      $sql_u = "SELECT `p`.`id_produk`,`k`.`kategori_produk`, `p`.`nama`,`p`.`komposisi`,`p`.`harga` 
                                FROM `produk` `p`
                                INNER JOIN `kategori_produk` `k` ON `p`.`id_kategori_produk` =`k`.`id_kategori_produk`";
                      if (!empty($katakunci_produk)){
                        $sql_u .= " WHERE `p`.`nama` LIKE '%$katakunci_produk%'";
                      }
                        $sql_u .= " ORDER BY `k`.`kategori_produk`, `p`.`nama` limit $posisi, $batas ";
                        $query_u = mysqli_query($koneksi,$sql_u);
                        $no = $posisi+1;
                        while($data_u = mysqli_fetch_row($query_u)){
                          $id_produk = $data_u[0];
                          $kategori_produk = $data_u[1];
                          $nama = $data_u[2];
                          $komposisi = $data_u[3];
                          $harga = $data_u[4];
                        ?>
                  <tr>
                    <td align="center"><?php echo $no; ?></td>
                    <td align="center"><?php echo $kategori_produk; ?></td>
                    <td align="center"><?php echo $nama; ?></td>
                    <td align="center"><?php echo $komposisi; ?></td>
                    <td align="center"><?php echo $harga; ?></td>
                    <td align="center">
                      <a href="detail-produk-data-<?php echo $id_produk;?>" class="btn btn-xs btn-primary"
                        title="Detail"><i class="fas
                              fa-eye"></i>Detail</a>
                      <a href="edit-produk-data-<?php echo $id_produk;?>" class="btn btn-xs btn-warning"
                        title="Edit"><i class="fas
                              fa-edit"></i>Edit</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?')) window.location.href ='produk-data-<?php echo $id_produk; ?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-danger"><i class="fas fa-trash" title="Hapus"></i>Hapus</a>
                    </td>
                  </tr>
                  <?php $no ++;} ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <?php
            //hitung jumlah semua data
              $sql_jum = "SELECT `p`.`id_produk`,`k`.`kategori_produk`, `p`.`nama`,`p`.`komposisi`,`p`.`harga`
                          FROM `produk` `p`
                          INNER JOIN `kategori_produk` `k` ON `p`.`id_kategori_produk` =`k`.`id_kategori_produk`";
              if (!empty($katakunci_produk)){
                $sql_jum .= "WHERE `p`.`nama` LIKE '%$katakunci_produk%'";
              }
                $sql_jum .= "ORDER BY `k`.`kategori_produk`, `p`.`nama`";
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
                      echo "<li class='page-item'><a class='page-link' href='produk-halaman-1' style='color: green;'>Awal</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='produk-halaman-$sebelum' style='color: green;'>«</a></li>";
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' href='produk-halaman-$i' style='color: green;'>$i</a></li>";
                        }else{
                          echo "<li class='page-item'><a class='page-link' style='color: green; font-weight: bold;'>$i</a></li>";
                        }
                      }
                    }
                    if($halaman!=$jum_halaman){
                      echo "<li class='page-item'><a class='page-link' href='produk-halaman-$setelah' style='color: green;'>»</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='produk-halaman-$jum_halaman' style='color: green;'>Akhir</a></li>";
                    }
                  } ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </section>