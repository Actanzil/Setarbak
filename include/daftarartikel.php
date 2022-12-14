<?php
    include('includes/fungsi.php');
    $batas = 2;
    if(!isset($_GET['halaman'])){
      $posisi = 0;
      $halaman = 1;
    }else{
      $halaman = $_GET['halaman'];
      $posisi = ($halaman-1) * $batas;
    }
?>
<section id="blog-header">
    <div class="container">
        <h1 class="text-white">ARTIKEL</h1>
    </div>
</section><br><br>
<section id="blog-list">
    <main role="main" class="container">
        <?php 
            if(isset($_GET['include'])){
                $include = $_GET['include'];
                if(isset($_GET['data'])){
                    $data = $_GET['data'];
                    if($include=='daftar-artikel-arsip'){
                        $ex = explode("-",$data);
                        $bulan = $ex[0];
                        $tahun = $ex[1];
                        $sql = "SELECT 
                                DATE_FORMAT(`tanggal`,'%c-%Y') 
                                AS `tgl` 
                                FROM `artikel` 
                                WHERE MONTH(`tanggal`) = $bulan 
                                AND YEAR(`tanggal`) = $tahun";
                    }
                    $query = mysqli_query($koneksi, $sql);
                    while($data_b = mysqli_fetch_row($query)){
                        $nama = $data_b[0];
                    }
                }
            }
        ?>
        <h2 class="text-dark">
            <?php 
                if($include=='daftar-artikel-arsip'){ 
                    echo "Arsip : ", BulanIndo($nama);
                }
            ?>
        </h2><br><br>
        <div class="row">
            <div class="col-md-9 blog-main">
                <?php
                    if(isset($_GET['data'])){
                        $data = $_GET['data'];
                        $include = $_GET['include'];
                        if($include == 'daftar-artikel-arsip'){
                            include('arsip.php');
                        }else{
                            echo "<h3>Artikel Tidak Tersedia</h3>"; 
                        }
                    }
                ?>
            </div><!-- /.blog-main -->

            <aside class="col-md-3 blog-sidebar">
                <div class="p-4">
                    <h4 class="font-italic">Arsip Artikel</h4>
                    <ol class="list-unstyled mb-0">
                        <?php
                        $date= "  SELECT `id_artikel`, 
                                    DATE_FORMAT(`tanggal`, '%m-%Y') 
                                    AS `tgl` 
                                    FROM `artikel` 
                                    GROUP BY `tgl`";
                        $query_a = mysqli_query($koneksi,$date);
                        while($data_a = mysqli_fetch_row($query_a)){
                            $id_ar = $data_a[0];
                            $tanggal = $data_a[1];
                        ?>

                        <li><a href="daftar-artikel-arsip-data-<?php echo $tanggal; ?>" style="color:green;">
                        <?php echo BulanIndo($tanggal);?></a></li>
                        <?php }?>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

</section><br><br>