<?php
include "../config/conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "DELETE FROM siswa WHERE id=$id";
    // echo $query;
    $output = mysqli_query($conn, $query);

    if ($output) {
        header('Location: ../siswa.php.');
    } else {
        die('Data Gagal Dihapus');
    }
} else {
    die('Akses Hapus Dilarang');
}
