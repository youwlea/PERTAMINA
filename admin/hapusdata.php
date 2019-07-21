<?php

include('koneksi_data.php');

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM users WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: home.php?halaman=admin ');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>