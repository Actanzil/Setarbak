<?php
    $id_kategori_produk = $_POST['id_kategori_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    
    if(empty($kategori_produk)){
        header("Location:tambah-kategori-produk_notif-tambahkosong");
    }else{
        $sql = "INSERT INTO `kategori_produk` (`id_kategori_produk`,`kategori_produk`)
                VALUES ('$id_kategori_produk', '$kategori_produk')";
        mysqli_query($koneksi,$sql);
        header("Location:kategori-produk_notif-tambahberhasil");
    }
?>