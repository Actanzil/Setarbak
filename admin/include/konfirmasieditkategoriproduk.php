<?php
    if(isset($_SESSION['id_kategori_produk'])){
        $id_kategori_produk = $_SESSION['id_kategori_produk'];
        $kategori_produk = $_POST['kategori_produk'];
        if(empty($kategori_produk)){
            header("Location:edit-kategori-produk-data-".$id_kategori_produk."_notif-editkosong-jenis-Kategori_Produk");
        }else{
            $sql = "UPDATE `kategori_produk` 
                    SET `kategori_produk`='$kategori_produk'
                    WHERE `id_kategori_produk`='$id_kategori_produk'";
            mysqli_query($koneksi,$sql);
            header("Location:kategori-produk_notif-editberhasil");
        }
    }
?>