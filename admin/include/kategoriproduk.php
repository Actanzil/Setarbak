<?php
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
      $id_kategori_produk = $_GET['data'];
      //hapus kategori produk
      $sql_dh = "DELETE FROM `kategori_produk` WHERE `id_kategori_produk` = '$id_kategori_produk'";
      mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_kategori = $_POST["katakunci"];
    $_SESSION['katakunci_kategori_produk'] = $katakunci_kategori;
  }
  if(isset($_SESSION['katakunci_kategori_produk'])){
    $katakunci_kategori = $_SESSION['katakunci_kategori_produk'];
  }else{
    unset($_SESSION['katakunci_kategori_produk']);
  }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-file-invoice"></i> Kategori Produk</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Kategori Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Kategori Produk</h3>
                <div class="card-tools">
                <a href="tambah-kategori-produk" class="btn btn-sm btn-success float-right"><i class="fas fa-plus"></i> Tambah Kategori Produk</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <form action="kategori-produk" method="POST" >
                    <div class="row">
                      <div class="col-md-4 bottom-10">
                        <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                      </div>
                      <div class="col-md-5 bottom-10">
                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
                      </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                      <div class="alert alert-primary" role="alert">
                      Data Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                      <div class="alert alert-primary" role="alert">
                      Data Berhasil Diubah</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                      <div class="alert alert-primary" role="alert">
                      Data Berhasil Dihapus</div>
                    <?php }?>
                  <?php } ?>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="5%"><center>No</center></th>
                      <th width="80%"><center>Kategori produk</center></th>
                      <th width="15%"><center>Aksi</center></th>
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
                      $sql_k = "SELECT `id_kategori_produk`,`kategori_produk` 
                                FROM `kategori_produk` ";
                      if (!empty($katakunci_kategori)){
                        $sql_k .= " WHERE `kategori_produk` LIKE '%$katakunci_kategori%' ";
                      }
                      $sql_k .=" ORDER BY `kategori_produk` limit $posisi, $batas";
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = $posisi+1;
                      while($data_k = mysqli_fetch_row($query_k)){
                        $id_kategori_produk = $data_k[0];
                        $kategori_produk = $data_k[1];
                    ?>
                    <tr>
                      <td align="center"><?php echo $no; ?></td>
                      <td><?php echo $kategori_produk; ?></td>
                      <td align="center">
                        <a href="edit-kategori-produk-data-<?php echo $id_kategori_produk;?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $kategori_produk; ?>?')) window.location.href ='kategori-produk-data-<?php echo $id_kategori_produk;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php $no++;} ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data
                $sql_jum = "SELECT `id_kategori_produk`, `kategori_produk` 
                            FROM `kategori_produk` ";
                if (!empty($katakunci_kategori)){
                  $sql_jum .= " WHERE `kategori_produk` LIKE '%$katakunci_kategori%'";
                }
                $sql_jum .= " ORDER BY `kategori_produk`";
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
                      echo "<li class='page-item'><a class='page-link' href='kategori-produk-halaman-1' style='color: green;'>Awal</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='kategori-produk-halaman-$sebelum'style='color: green;'>«</a></li>";
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' href='kategori-produk-halaman-$i'style='color: green;'>$i</a></li>";
                        }else{
                          echo "<li class='page-item'><a class='page-link' style='color: green; font-weight: bold;'>$i</a></li>";
                        }
                      }
                    }
                    if($halaman!=$jum_halaman){
                      echo "<li class='page-item'><a class='page-link' href='kategori-produk-halaman-$setelah'style='color: green;'>»</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='kategori-produk-halaman-$jum_halaman'style='color: green;'>Akhir</a></li>";
                    }
                  } ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.card -->
    </section