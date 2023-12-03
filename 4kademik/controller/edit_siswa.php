<?php
include '../config/conn.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tl = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE siswa SET nis='$nis', nama='$nama', jenisKelamin='$jk', tanggalLahir='$tl', alamat='$alamat', jurusan='$jurusan' WHERE id='$id'";
    $output = mysqli_query($conn, $query);

    if ($output) {
        header('Location: ../siswa.php');
    } else {
        header("Gagal Menyimpan Perubahan!");
    }
} else {
    die("Akses Telah Dilarang");
}
