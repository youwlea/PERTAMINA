<?php 
// memanggil fungsi koneksi
include 'koneksi_data.php';

// menerima inputan dari form
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$user_type = $_POST['user_type'];
$password = $_POST['password'];

// mengirim inputan ke table users
mysqli_query($db,"INSERT INTO users VALUES('','$username','$email','$fullname','$user_type','$password')");
// jika berhasil kembali ke admin
header("location:home.php?halaman=admin");
?>