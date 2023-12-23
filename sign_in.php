<?php
    $server = "localhost";
    $username = "iamh1952_iamj4rr";
    $pass = "HealthTips23.";
    $database = "iamh1952_healthtips";

// Create connection
$conn = new mysqli($server, $username, $pass, $database);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Get data from Android
$user_name = $_POST['post_username'];
$email = $_POST['post_email'];
$password = $_POST['post_password'];


// Insert data into MySQL
$sql = "INSERT INTO users (username, email , password) VALUES ('$user_name','$email','$password')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>