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
     $username = $_POST["post_username"];
     $password = $_POST["post_password"];

     //proses periksa email dan password di  database
     $query = "SELECT * FROM users where username='$username' AND password='$password'";
     $obj_query = mysqli_query($connect, $query);
     $data = mysqli_fetch_assoc($obj_query);

     //periksa  apakah login sudah benar
     if ($data){
        echo json_encode(
            array(
                'response' => true,
                //"id" => $data["id"],
                'payload' => array(
                    "username" => $data["username"],
                    "email" => $data["email"],
                    "id" => $data["id"],
                    "jk" => $data["jk"],
                    "nama" => $data["nama"],
                    "umur" => $data["umur"],
                    "berat" => $data["berat"],
                    "tinggi" => $data["tinggi"],
                    "tingkat_a" => $data["tingkat_aktivitas"],
                    "jam_tidur" => $data["jumlah_jam_tidur"],
                )
            )
        );
     } else  {
        echo json_encode(
            array(
                'response' => false,
                'payload' => null,
                "error" => "User not found"
            )
        );
     }

     //mengatur tampilan json
     header('Content-Type: application/json');