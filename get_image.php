<?php
    $servername = "localhost";
    $username = "iamh1952_iamj4rr";
    $password = "HealthTips23.";
    $dbname = "iamh1952_healthtips";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Array untuk menampilkan respon
$response = array();

// Memeriksa apakah parameter dikirimkan
if ($_POST['post_id']) {
  $id = $_POST['post_id'];
  $stmt = $conn->prepare("SELECT gambar, link_article FROM article WHERE id = ?");
  $stmt->bind_param("s", $id);
  $result = $stmt->execute();

  if ($result == TRUE) {
      $response['error'] = false;
      $response['message'] = "Pengambilan Berhasil!";
      $stmt->store_result();
      $stmt->bind_result($gambar,$link_article);
      $stmt->fetch();
      $response['gambar'] = $gambar;
      $response['link_article'] = $link_article;
  } else {
      $response['error'] = true;
      $response['message'] = "ID Salah";
  }
} else {
  $response['error'] = true;
  $response['message'] = "Parameter Kurang";
}

echo json_encode($response);
?>