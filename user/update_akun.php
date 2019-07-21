<?php 

$db = mysqli_connect('localhost', 'root', '', 'kominfo');

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];

mysqli_query($db,"UPDATE users SET username='$username', email='$email', fullname='$fullname', password='$password' WHERE id='$id'");

header("location:home_user.php?halaman=akun");
?>