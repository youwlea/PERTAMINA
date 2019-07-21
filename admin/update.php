<?php 

include 'koneksi_data.php';
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$user_type = $_POST['user_type'];
$password = $_POST['password'];

mysqli_query($db,"UPDATE users SET username='$username', email='$email', fullname='$fullname', user_type='$user_type', password='$password' WHERE id='$id'");

header("location:home.php?halaman=admin");
?>