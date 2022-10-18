<?php
    $id_kategori_produk = $_POST['kategori_produk'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $kalori = $_POST['kalori'];
    $kolesterol = $_POST['kolesterol'];
    $karbohidrat = $_POST['karbohidrat'];
    $protein = $_POST['protein'];
    $kafein = $_POST['kafein'];
    $komposisi = $_POST['komposisi'];
    $harga = $_POST['harga'];
    
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gambar/'.$nama_file;

    if(empty($id_kategori_produk)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Kategori_Produk");
    }else if(empty($nama)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Nama_Produk");
    }else if(empty($deskripsi)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Deskripsi_Produk");
    }else if(empty($kalori)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Kalori");
    }else if(empty($kolesterol)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Kolesterol");
    }else if(empty($karbohidrat)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Karbohidrat");
    }else if(empty($protein)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Protein");
    }else if(empty($kafein)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Kafein");
    }else if(empty($komposisi)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Komposisi");
    }else if(empty($harga)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Harga");
    }else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:tambah-produk-data-".$id_produk."_notif-tambahkosong-jenis-Gambar_Produk");
    }else{
        $sql = "INSERT INTO `produk`(`id_kategori_produk`,`nama`,`deskripsi`,`kalori`,`kolesterol`,`karbohidrat`,`protein`,`kafein`,`komposisi`,`harga`,`gambar`)
                VALUES ('$id_kategori_produk','$nama','$deskripsi','$kalori','$kolesterol','$karbohidrat','$protein','$kafein','$komposisi','$harga','$nama_file')";
        
        mysqli_query($koneksi,$sql);
        $id_produk = mysqli_insert_id($koneksi);
        header("Location:produk_notif-tambahberhasil");
    }
?>