        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah Produk</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="produk" style='color: green;'>Data Produk</a></li>
                  <li class="breadcrumb-item active">Tambah Produk</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Produk</h3>
              <div class="card-tools">
                <a href="produk" class="btn btn-sm btn-warning float-right">
                <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
              </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            </br></br>
            <div class="col-sm-10">
              <?php if((!empty($_GET['notif']))||(!empty($_GET['jenis']))){?>
                <?php if($_GET['notif']=="tambahkosong"){?>
                  <div class="alert alert-danger" role="alert">Maaf data
                  <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php } ?>
              <?php } ?>
            </div>
            <form class="form-horizontal" method="POST" action="konfirmasi-tambah-produk" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group row">
                  <label for="gambar" class="col-sm-3 col-form-label">Gambar Produk</label>
                  <div class="col-sm-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="gambar" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kategori_produk" class="col-sm-3 col-form-label">Kategori Produk</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="kategori_produk" name="kategori_produk">
                      <option value="">- Pilih Kategori -</option>
                      <?php
                        $sql_k = "SELECT `id_kategori_produk`, `kategori_produk` 
                                  FROM `kategori_produk` 
                                  ORDER BY `kategori_produk`";
                        $query_k = mysqli_query($koneksi, $sql_k);
                        while($data_k = mysqli_fetch_row($query_k)){
                          $id_kategori_produk = $data_k[0];
                          $kategori_produk = $data_k[1];
                      ?>
                      <option value="<?php echo $id_kategori_produk; ?>"><?php echo $kategori_produk; ?></option>
                      <?php } ?>
                    </select> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 col-form-label">Nama Produk</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" id="nama" value="">
                  </div>
                </div>
                <div class="form-group row">
                <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi Produk</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="8"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kalori" class="col-sm-3 col-form-label">Kalori</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="kalori" id="kalori" value="" placeholder="dalam satuan Kalori(kkal) ex : 0,5kkal">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kolesterol" class="col-sm-3 col-form-label">Kolesterol</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="kolesterol" id="kolesterol" value="" placeholder="dalam satuan Mili Gram(mg) ex : 0mg">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="karbohidrat" class="col-sm-3 col-form-label">Karbohidrat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="karbohidrat" id="karbohidrat" value="" placeholder="dalam satuan Gram(g) ex : 0g">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="protein" class="col-sm-3 col-form-label">Protein</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="protein" id="protein" value="" placeholder="dalam satuan Gram(g) ex : 0g">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kafein" class="col-sm-3 col-form-label">Kafein</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="kafein" id="kafein" value="" placeholder="dalam satuan Mili Gram(mg) ex : 212mg">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="komposisi" class="col-sm-3 col-form-label">Komposisi</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="komposisi" id="komposisi" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="harga" id="harga" value="" placeholder="ex : Rp.1000">
                  </div>
                </div>          
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah</button>
                </div>  
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </section>