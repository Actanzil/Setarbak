<?php
    if(isset($_SESSION['id_artikel'])){
        $id_artikel = $_SESSION['id_artikel'];
        $id_user = $_POST['id_user'];
        $date = $_POST['tanggal'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        
        if(empty($judul)){
            header("Location:edit-artikel-data-".$id_artikel."_notif-editkosong-jenis-judul");
        }else if(empty($isi)){
            header("Location:edit-artikel-data-".$id_artikel."_notif-editkosong-jenis-Isi");
        }else{
            $sql = "UPDATE `artikel` 
                    SET `tanggal`='$date', `judul`='$judul',`isi`='$isi',`id_user`='$id_user'
                    WHERE `id_artikel`='$id_artikel'";
            mysqli_query($koneksi,$sql);
            header("Location:artikel_notif-editberhasil");
        } 
        
    }
?>