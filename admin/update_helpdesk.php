<?php 

include 'koneksi_data.php';
$id_hp = $_POST['id_hp'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];

mysqli_query($db,"UPDATE helpdesk SET tanggal='$tanggal', judul='$judul', isi='$isi', kategori='$kategori' WHERE id_hp='$id_hp'");
header("location:home.php?halaman=datahelpdesk");
?>