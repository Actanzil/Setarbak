<?php 
  include("koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("includes/head.php"); ?>
  </head>
  <body>
    <?php include("includes/navigasi.php");?>
    
    <?php
      //pemanggilan konten halaman index
      if(isset($_GET["include"])){
        $include = $_GET["include"];
        if ($include=="daftar-produk") {
          include("include/daftarproduk.php");
        }elseif ($include=="daftar-produk-kategori") {
          include("include/daftarproduk.php");
        }elseif ($include=="detail-produk") {
          include("include/detailproduk.php");
        }elseif ($include=="artikel") {
          include("include/artikel.php");
        }elseif ($include=="daftar-artikel-arsip") {
          include("include/daftarartikel.php");
        }elseif ($include=="detail-artikel") {
          include("include/detailartikel.php");
        }elseif ($include=="tentang-kami") {
          include("include/tentangkami.php");
        }elseif ($include=="penulis") {
          include("include/penulis.php");
        }else{
          include("include/index.php");
        }
      }else{
        include("include/index.php");
      } 
    ?>
    
    <?php include("includes/footer.php");?>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <?php include("includes/script.php");?>
  </body>

</html>