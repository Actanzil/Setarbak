<?php
    if(isset($_SESSION['id_produk'])){
        $id_produk = $_SESSION['id_produk'];
        $id_kategori_produk = $_POST['kategori_produk'];
        $nama = $_POST['nama'];
        $deskripsi = addslashes($_POST['deskripsi']);
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
        
        //get gambar
        $sql_g = "SELECT `gambar` FROM `produk` WHERE `id_produk`='$id_produk'";
        $query_g = mysqli_query($koneksi,$sql_g);
        while($data_g = mysqli_fetch_row($query_g)){
            $gambar = $data_g[0];
            //echo $gambar;
        }
        if(empty($id_kategori_produk)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Kategori_Produk");
        }else if(empty($nama)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Nama_Produk");
        }else if(empty($deskripsi)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Deskripsi_Produk");
        }else if(empty($kalori)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Kalori");
        }else if(empty($kolesterol)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Kolesterol");
        }else if(empty($karbohidrat)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Karbohidrat");
        }else if(empty($protein)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Protein");
        }else if(empty($kafein)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Kafein");
        }else if(empty($komposisi)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Komposisi");
        }else if(empty($harga)){
            header("Location:edit-produk-data-".$id_produk."_notif-editkosong-jenis-Harga");
        }else{
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $nama_file = $_FILES['gambar']['name'];
            $direktori = 'gambar/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
                if(!empty($gambar)){ 
                    unlink("gambar/$gambar");
                }
                $sql = "UPDATE `produk` 
                        SET `id_kategori_produk`='$id_kategori_produk',`nama`='$nama', `deskripsi`='$deskripsi', `kalori`='$kalori', `kolesterol`='$kolesterol',
                            `karbohidrat`='$karbohidrat', `protein`='$protein', `kafein`='$kafein', `komposisi`='$komposisi', `harga`='$harga',
                            `gambar`='$nama_file'
                        WHERE `id_produk`='$id_produk'";
                mysqli_query($koneksi,$sql);
            }else{
                $sql = "UPDATE `produk` 
                        SET `id_kategori_produk`='$id_kategori_produk',`nama`='$nama', `deskripsi`='$deskripsi', `kalori`='$kalori', `kolesterol`='$kolesterol',
                            `karbohidrat`='$karbohidrat', `protein`='$protein', `kafein`='$kafein', `komposisi`='$komposisi', `harga`='$harga'
                        WHERE `id_produk`='$id_produk'";
                mysqli_query($koneksi,$sql);
            } 
            header("Location:produk_notif-editberhasil");
        } 
    }
?>