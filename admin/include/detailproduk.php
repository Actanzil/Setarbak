<?php
  if(isset($_GET['data'])){
    $id_produk = $_GET['data'];
    //gat data produk
    $sql = "SELECT `p`.`gambar`,`k`.`kategori_produk`,`p`.`nama`,`p`.`deskripsi`,`p`.`kalori`,`p`.`kolesterol`, 
                  `p`.`karbohidrat`, `p`.`protein`, `p`.`kafein`, `p`.`komposisi`, `p`.`harga` 
            FROM `produk` `p`
            INNER JOIN `kategori_produk` `k` ON `p`.`id_kategori_produk`=`k`.`id_kategori_produk`
            WHERE `p`.`id_produk`='$id_produk'";
    $query = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_row($query)){
      $gambar = $data[0];
      $kategori_produk = $data[1];
      $nama = $data[2];
      $deskripsi = $data[3];
      $kalori = $data[4];
      $kolesterol = $data[5];
      $karbohidrat = $data[6];
      $protein = $data[7];
      $kafein = $data[8];
      $komposisi = $data[9];
      $harga = $data[10];
    }
  }
?>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h3><i class="fas fa-coffee"></i> Detail Data Produk</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="produk" style='color: green;'>Data Produk</a></li>
                  <li class="breadcrumb-item active">Detail Data Produk</li>
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
                      <a href="produk" class="btn btn-sm btn-warning float-right">
                      <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>                      
                          <tr>
                            <td><strong>Gambar Produk<strong></td>
                            <td><img src="gambar/<?php echo $gambar; ?>" class="img-fluid" width="200px;"></td>
                          </tr>               
                          <tr>
                            <td width="20%"><strong>Kategori Produk<strong></td>
                            <td width="80%"><?php echo $kategori_produk; ?></td>
                          </tr>                 
                          <tr>
                            <td width="20%"><strong>Nama Produk<strong></td>
                            <td width="80%"><?php echo $nama; ?></td>
                          </tr>                 
                          <tr>
                            <td width="20%"><strong>Informasi deskripsi<strong></td>
                            <td width="80%" style="text-align: justify;"><?php echo $deskripsi; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Kalori<strong></td>
                            <td width="80%"><?php echo $kalori; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Kolesterol<strong></td>
                            <td width="80%"><?php echo $kolesterol; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Karbohidrat<strong></td>
                            <td width="80%"><?php echo $karbohidrat; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Protein<strong></td>
                            <td width="80%"><?php echo $protein; ?></td>
                          </tr>
                           <tr>
                            <td width="20%"><strong>Kafein<strong></td>
                            <td width="80%"><?php echo $kafein; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Komposisi<strong></td>
                            <td width="80%"><?php echo $komposisi; ?></td>
                          </tr>
                          <tr>
                            <td width="20%"><strong>Harga<strong></td>
                            <td width="80%"><?php echo $harga; ?></td>
                          </tr>
                        </tbody>
                      </table>  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">&nbsp;</div>
                </div>
                <!-- /.card -->
        </section>