<?php 

include 'koneksi_data.php';
$id_laporan = $_POST['id_laporan'];
$tanggal = $_POST['tanggal'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$departemen = $_POST['departemen'];
$problem = $_POST['problem'];
$status = $_POST['status'];

mysqli_query($db,"UPDATE pengaduan SET tanggal='$tanggal', fullname='$fullname', email='$email', departemen='$departemen', problem='$problem', status='$status' WHERE id_laporan='$id_laporan'");

header("location:home.php?halaman=laporan");
?>