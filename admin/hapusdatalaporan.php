<?php

include('koneksi_data.php');

if( isset($_GET['id_laporan']) ){

    // ambil id dari query string
    $id_laporan = $_GET['id_laporan'];

    // buat query hapus
    $sql = "DELETE FROM pengaduan WHERE id_laporan=$id_laporan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: home.php?halaman=laporan ');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>