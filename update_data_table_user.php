<?php

   $servername = "localhost";
    $username = "iamh1952_iamj4rr";
    $pass = "HealthTips23.";
    $dbname = "iamh1952_healthtips";
    $connect = mysqli_connect($servername,$username, $pass, $dbname);

   if(mysqli_connect_errno()){
       echo "Gagal connect dengan database" . mysqli_connect_errno();
   }

   //tangkap data yang dikirim android
    $id = $_POST["post_id"];
    $nama = $_POST["post_username"];
    $email = $_POST["post_email"];
    $jk = $_POST["post_jk"];

    //proses periksa email dan password di database
    if(!empty($nama)){
        $query = "UPDATE users SET username='$nama' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "username berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }
    
    if(!empty($email)){
        $query = "UPDATE users SET email='$email' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "email berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }
    
    if(!empty($jk)){
        $query = "UPDATE users SET jk='$jk' WHERE id='$id'";
        $obj_query = mysqli_query($connect, $query);
        if($obj_query){
            echo "jenis kelamin berhasil diubah";
            
        } else {
            echo "Gagal mengubah data";
            
        }
    }


    //mengatur tampilan json
    header('Content-Type: application/json');
?>