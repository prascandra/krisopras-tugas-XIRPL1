<?php
session_start();

if (!isset($_SESSION['username'])) {
    header ("Location:  index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>

<body>
    <header>
        <h2>Form Tambah Siswa Baru</h2>
    </header>

    <form action="controller/tambah_siswa.php" method="post">
        <div>
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" required>
        </div>

        <br>

        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>

        <br>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <br>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
        </div>

        <br>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea>
        </div>

        <br>
        <div>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="" required>
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Tehnik Komputer dan Jaringan">Tehnik Komputer dan Jaringan</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Sistem Imformasi Jaringan">Sistem Imformasi Jaringan</option>
            </select>
        </div>

        <br>

        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>

</html>