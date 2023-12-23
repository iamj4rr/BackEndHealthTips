<?php

    $server = "localhost";
    $username = "iamh1952_iamj4rr";
    $pass = "HealthTips23.";
    $database = "iamh1952_healthtips";
    $connect = mysqli_connect($server,$username, $pass, $database);

   if(mysqli_connect_errno()){
       echo "Gagal connect dengan database" . mysqli_connect_errno();
   }

   //tangkap data yang dikirim android
    $id = $_POST["post_id"];
    $nama = $_POST["post_nama"];
    $umur = $_POST["post_umur"];
    $berat = $_POST["post_berat"];
    $tinggi = $_POST["post_tinggi"];
    $tingkat_a = $_POST["post_tingkat_a"];
    $jumlah_jam = $_POST["post_jumlah_jam"];

    //proses periksa email dan password di database
    if(!empty($nama)){
        $query = "UPDATE users SET nama='$nama' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "nama berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }
    
    if(!empty($umur)){
        $query = "UPDATE users SET umur='$umur' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "umur berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }
    
    if(!empty($berat)){
        $query = "UPDATE users SET berat='$berat' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "berat badan berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }

    if(!empty($tinggi)){
        $query = "UPDATE users SET tinggi='$tinggi' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "tinggi badan berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }

    if(!empty($tingkat_a)){
        $query = "UPDATE users SET tingkat_aktivitas='$tingkat_a' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "tingkat aktivitas berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }

    if(!empty($jumlah_jam)){
        $query = "UPDATE users SET jam_tidur='$jumlah_jam' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "jumlah jam tidur berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }


    //mengatur tampilan json
    header('Content-Type: application/json');
?>