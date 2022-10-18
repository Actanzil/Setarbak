<?php
    $batas = 3;
    if(!isset($_GET['halaman'])){
        $posisi = 0;
        $halaman = 1;
    }else{
        $halaman = $_GET['halaman'];
        $posisi = ($halaman-1) * $batas;
    }
    $sql_p = "  SELECT `id_produk`, `nama`, `gambar`, `harga` 
                FROM `produk` 
                WHERE `id_kategori_produk` = $data 
                ORDER BY `nama` 
                LIMIT $posisi, $batas";                   
    $query_p = mysqli_query($koneksi,$sql_p);
    $row = mysqli_num_rows($query_p);
    if($row == 0 ){
        ?>
        <div class="col-md-4">
            <h3>Produk Tidak Tersedia</h3>
        </div>
        <?php
    }else{
        while($data_p = mysqli_fetch_row($query_p)){
            $id_produk = $data_p[0];
            $nama = $data_p[1];
            $gambar = $data_p[2];
            $harga = $data_p[3];
        ?>
<div class="col-md-4">
    <div class="card mb-4 shadow-sm text-center">
        <img src="admin/gambar/<?php echo $gambar; ?>" class="card-img-fluid" alt="<?php echo $nama; ?>"
            title="<?php echo $nama; ?>">
        <div class="card-body">
            <h5 class="card-text mb-1"><?php echo $nama; ?></h5>
            <span class="badge badge-primary mb-3"><?php echo $harga; ?></span>
            <div class="justify-content align-items-center">
                <a href="detail-produk-data-<?php echo $id_produk; ?>" class="btn btn-success stretched-link">Detail Produk</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="col-sm-12">
    <nav aria-label="Page navigation">
        <?php 
            $sql_b = "  SELECT `id_produk`, `nama`, `gambar` 
                        FROM `produk` 
                        WHERE `id_kategori_produk` = $data 
                        ORDER BY `nama`";
            $query_jum = mysqli_query($koneksi, $sql_b);
            $jum_data = mysqli_num_rows($query_jum);
            $jum_halaman = ceil($jum_data/$batas);
        ?>
        <ul class="pagination">
            <?php
                if($jum_halaman==0){
                    // tidak ada halaman
                }else if($jum_halaman==1){
                    echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                    $sebelum = $halaman - 1;
                    $setelah = $halaman + 1;
                    if($halaman!=1){
                        echo "
                            <li class='page-item'>
                                <a class='page-link' href='daftar-produk-kategori-data-$data-halaman-1' style='color: green;'>Awal</a>
                            </li>
                        ";
                        echo "
                            <li class='page-item'>
                                <a class='page-link' href='daftar-produk-kategori-data-$data-halaman-$sebelum' style='color: green;'>«</a>
                            </li>
                        ";
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                        if($i > $halaman - 5 and $i < $halaman + 5){
                            if($i!=$halaman){
                                echo "
                                    <li class='page-item'>
                                        <a class='page-link' href='daftar-produk-kategori-data-$data-halaman-$i' style='color: green;'>$i</a>
                                    </li>
                                ";
                            }else{
                                echo "
                                    <li class='page-item'>
                                        <a class='page-link' style='color: green; font-weight: bold;'>$i</a>
                                    </li>
                                ";
                            }
                        }
                    }
                    if($halaman!=$jum_halaman){
                        echo "
                            <li class='page-item'>
                                <a class='page-link' href='daftar-produk-kategori-data-$data-halaman-$setelah' style='color: green;'>»</a>
                            </li>
                        ";
                        echo "
                            <li class='page-item'>
                                <a class='page-link' href='daftar-produk-kategori-data-$data-halaman-$jum_halaman' style='color: green;'>Akhir</a>
                            </li>
                        ";
                    }
                }                
            ?>
        </ul>
    </nav>
</div>
<?php } ?>