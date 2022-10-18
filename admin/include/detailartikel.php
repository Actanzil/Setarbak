<?php
  if(isset($_GET['data'])){
    $id_artikel = $_GET['data'];
    //gat data artikel
    $sql = "SELECT `a`.`tanggal`,`u`.`nama`,`a`.`judul`,`a`.`isi` 
            FROM `artikel` `a`
            INNER JOIN `user` `u` ON `a`.`id_user`=`u`.`id_user`
            WHERE `a`.`id_artikel`='$id_artikel'";
    $query = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_row($query)){
      $tanggal = $data[0];
      $nama = $data[1];
      $judul = $data[2];
      $isi = $data[3];
    }
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-file-pdf"></i> Detail Data Artikel</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="artikel" style='color: green;'>Data Artikel</a></li>
                  <li class="breadcrumb-item active">Detail Data Artikel</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="card">
                  <div class="card-header">
                    <div class="card-tools">
                      <a href="artikel" class="btn btn-sm btn-warning float-right">
                      <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>                 
                          <tr>
                            <td width="20%"><strong>Tanggal Pembuatan<strong></td>
                            <td width="80%"><?php echo $tanggal; ?></td>
                          </tr>                               
                          <tr>
                            <td width="20%"><strong>Pengarang<strong></td>
                            <td width="80%"><?php echo $nama; ?></td>
                          </tr> 
                          <tr>
                            <td width="20%"><strong>Judul<strong></td>
                            <td width="80%"><?php echo $judul; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Isi<strong></td>
                            <td width="80%" style="text-align: justify;"><?php echo $isi; ?></td>
                          </tr>
                        </tbody>
                      </table>  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">&nbsp;</div>
                </div>
                <!-- /.card -->
        </section>