<?php
    if(isset($_GET['data'])){
      $id_kategori_produk = $_GET['data'];
      $_SESSION['id_kategori_produk']=$id_kategori_produk;
        
    //get data kategori produk
    $sql_d = "SELECT `id_kategori_produk`, `kategori_produk` 
              FROM `kategori_produk` 
              WHERE `id_kategori_produk` = '$id_kategori_produk'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
      $id_kategori_produk= $data_d[0];
      $kategori_produk= $data_d[1];
    }
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Kategori Produk</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="kategori-produk" style='color: green;'>Kategori Produk</a></li>
                  <li class="breadcrumb-item active">Edit Kategori Produk</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Kategori produk</h3>
              <div class="card-tools">
                <a href="kategori-produk" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
              </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            </br>
            <div class="col-sm-10">
              <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){ ?>
                <?php if($_GET['notif']=="editkosong"){ ?>
                  <div class="alert alert-danger" role="alert">Maaf data
                <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php } ?>
              <?php } ?>
            </div>
            <form class="form-horizontal" method="POST" action="konfirmasi-edit-kategori-produk">
              <div class="card-body">
                <div class="form-group row">
                  <label for="kategori_produk" class="col-sm-3 col-form-label">Kategori Produk</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="kategori_produk"
                    Name="kategori_produk" value="<?php echo $kategori_produk; ?>">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-success float-right">
                  <i class="fas fa-save"></i> Simpan</button>
                </div>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </section>