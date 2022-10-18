<?php
  if(isset($_GET['data'])){
    $id_produk = $_GET['data'];
    $_SESSION['id_produk']=$id_produk;
  //get data produk
    $sql_m = "SELECT `id_kategori_produk`,`nama`,`deskripsi`,`kalori`,`kolesterol`,`karbohidrat`,`protein`,`kafein`,`komposisi`,`harga` 
              FROM `produk`
              WHERE `id_produk`='$id_produk'";
    $query_m = mysqli_query($koneksi,$sql_m);
    while($data_m = mysqli_fetch_row($query_m)){
      $id_kategori_produk= $data_m[0];
      $nama = $data_m[1];
      $deskripsi = $data_m[2];
      $kalori = $data_m[3];
      $kolesterol = $data_m[4];
      $karbohidrat = $data_m[5];
      $protein = $data_m[6];
      $kafein = $data_m[7];
      $komposisi = $data_m[8];
      $harga = $data_m[9];
    }
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data Produk</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="produk" style='color: green;'>Data Produk</a></li>
                  <li class="breadcrumb-item active">Edit Data Produk</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Produk</h3>
            <div class="card-tools">
              <a href="produk" class="btn btn-sm btn-warning float-right">
              <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          </br></br>
          <div class="col-sm-10">
            <?php if((!empty($_GET['notif']))||(!empty($_GET['jenis']))){ ?>
              <?php if($_GET['notif']=="editkosong"){ ?>
                <div class="alert alert-danger" role="alert">Maaf data
              <?php echo $_GET['jenis'];?> wajib di isi</div>
              <?php } ?>
            <?php } ?>
          </div>
          <form class="form-horizontal" action="konfirmasi-edit-produk" method="POST" enctype="multipart/form-data">
            <div class="card-body">  
              <div class="form-group row">
                <label for="gambar" class="col-sm-3 col-form-label">Gambar Produk </label>
                <div class="col-sm-7">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="gambar" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>  
                </div>
              </div>
              <div class="form-group row">
                <label for="kategori" class="col-sm-3 col-form-label">Kategori Produk</label>
                <div class="col-sm-7">
                  <select class="form-control" id="kategori" name="kategori_produk">
                    <option value="0">- Pilih Kategori -</option>
                    <?php
                    $sql_k = "SELECT `id_kategori_produk`,`kategori_produk`
                              FROM `kategori_produk` 
                              ORDER BY `kategori_produk`";
                    $query_k = mysqli_query($koneksi, $sql_k);
                    while($data_k = mysqli_fetch_row($query_k)){
                      $id_kategori_produk = $data_k[0];
                      $kategori_produk = $data_k[1];
                    ?>
                    <option value="<?php echo $id_kategori_produk; ?>"
                      <?php 
                        if($id_kategori_produk==$id_kategori_produk){ 
                      ?>
                      selected <?php } ?>><?php echo $kategori_produk; ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Produk</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi Produk</label>
                <div class="col-sm-7">
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="8"><?php echo $deskripsi; ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="kalori" class="col-sm-3 col-form-label">Kalori</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="kalori" id="kalori" value="<?php echo $kalori; ?>" placeholder="dalam satuan Kalori(kkal) ex : 0,5kkal">
                </div>
              </div>
              <div class="form-group row">
                <label for="kolesterol" class="col-sm-3 col-form-label">Kolesterol</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="kolesterol" id="kolesterol" value="<?php echo $kolesterol; ?>" placeholder="dalam satuan Mili Gram(mg) ex : 0mg">
                </div>
              </div>
              <div class="form-group row">
                <label for="karbohidrat" class="col-sm-3 col-form-label">Karbohidrat</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="karbohidrat" id="karbohidrat" value="<?php echo $karbohidrat; ?>" placeholder="dalam satuan Gram(g) ex : 0g">
                </div>
              </div>
              <div class="form-group row">
                <label for="protein" class="col-sm-3 col-form-label">Protein</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="protein" id="protein" value="<?php echo $protein; ?>" placeholder="dalam satuan Gram(g) ex : 0g">
                </div>
              </div>
              <div class="form-group row">
                <label for="kafein" class="col-sm-3 col-form-label">Kafein</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="kafein" id="kafein" value="<?php echo $kafein; ?>" placeholder="dalam satuan Mili Gram(mg) ex : 212mg">
                </div>
              </div>
              <div class="form-group row">
                <label for="komposisi" class="col-sm-3 col-form-label">Komposisi</label>
                <div class="col-sm-7">
                  <textarea class="form-control" name="komposisi" id="komposisi" rows="5"><?php echo $komposisi; ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $harga; ?>" placeholder="ex : Rp.1000">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Simpan</button>
              </div>  
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
        <!-- /.card -->
      </section>