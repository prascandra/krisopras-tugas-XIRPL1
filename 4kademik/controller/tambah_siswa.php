<?php
include "../config/conn.php";

if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $gender = $_POST['jenis_kelamin'];
    $dof = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO siswa (nis, nama, jenisKelamin, tanggalLahir, alamat, jurusan) 
    VALUES ('$nis', '$nama', '$gender', '$dof', '$alamat', '$jurusan')";
    $output = mysqli_query($conn, $query);

    if ($output) {
        header('Location: ../siswa.php?status=sukses');
    } else {
        header('Location: ../siswa.php?status=gagal');
    }
}
