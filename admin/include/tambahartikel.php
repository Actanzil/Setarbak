<?php
  $id_user = $_SESSION['id_user'];

  $timezone = new DateTimeZone('Asia/Jakarta');
  $date = new DateTime();
  $date->setTimeZone($timezone);
?> 
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah Artikel</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="artikel" style='color: green;'>Data Artikel</a></li>
                  <li class="breadcrumb-item active">Tambah Artikel</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Artikel</h3>
              <div class="card-tools">
                <a href="artikel" class="btn btn-sm btn-warning float-right">
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
                <?php }?>
              <?php }?>
            </div>
            <form class="form-horizontal" method="POST" action="konfirmasi-tambah-artikel">
              <div class="card-body">
                <div class="form-group row">
                  <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="judul" id="judul" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="isi" class="col-sm-3 col-form-label">Isi</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
                    <input hidden type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $date->format('Y-m-d'); ?>">
                    <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                  </div>
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