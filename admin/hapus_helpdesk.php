<?php

include('koneksi_data.php');

if( isset($_GET['id_hp']) ){

    // ambil id dari query string
    $id_hp = $_GET['id_hp'];

    // buat query hapus
    $sql = "DELETE FROM helpdesk WHERE id_hp=$id_hp";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: home.php?halaman=datahelpdesk');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>