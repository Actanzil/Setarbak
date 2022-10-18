<?php
    //$date = new DateTime('now',new DateTimeZone('Asia/Jakarta'));
    $judul = $_POST['judul'];
    $id_user = $_POST['id_user'];
    $isi = $_POST['isi'];
    $date = $_POST['tanggal'];
    
    if(empty($judul)){
        header("Location:tambah-artikel-data-".$id_artikel."_notif-tambahkosong-jenis-Judul");
    }else if(empty($isi)){
        header("Location:tambah-artikel-data-".$id_artikel."_notif-tambahkosong-jenis-Isi");
    }else{
        $sql = "INSERT INTO `artikel`(`id_user`,`tanggal`,`judul`,`isi`)
                VALUES ('$id_user','$date','$judul','$isi')";
        mysqli_query($koneksi,$sql);
        header("Location:artikel_notif-tambahberhasil");
    }
?>