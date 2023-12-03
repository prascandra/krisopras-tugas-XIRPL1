<?php
include 'config/conn.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: siswa.php");
}

$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id=$id";
$output = mysqli_query($conn, $query);
$siswa = mysqli_fetch_array($output);

if (mysqli_num_rows($output) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Siswa</title>
</head>

<body>

    <head>
        <h2>Edit Siswa</h2>
    </head>
    <form action="controller/edit_siswa.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $siswa['id'] ?>">

        <div>
            <label for="nis">NIS:</label>
            <input type="text" name="nis" id="nis" value="<?php echo $siswa['nis'] ?>">
        </div>
        <br>

        <div>
            <label for="nama">NAMA:</label>
            <input type="text" name="nis" id="nis" value="<?php echo $siswa['nama'] ?>">
        </div>
        <br>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <?php $jk = $siswa['jenisKelamin'] ?>
            <select name="jenis_kelamin" id="jk">
                <option <?php echo ($jk == 'L') ? "selected" : "" ?>>L</option>
                <option <?php echo ($jk == 'P') ? "selected" : "" ?>>P</option>
            </select>
        </div>
        <br>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tl" value="<?php echo $siswa['tanggalLahir'] ?>">
        </div>
        <br>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $siswa['alamat'] ?></textarea>
        </div>
        <br>

        <div>
            <label for="jurusan">Jurusan:</label>
            <?php $jurusan = $siswa['jurusan'] ?>
            <select name="jurusan" id="jurusan">
                <option <?php echo ($jurusan == 'Rekayasa Perangkat Lunak') ? "selected" : "" ?>>RPL</option>
                <option <?php echo ($jurusan == 'Tehnik Komputer dan Jaringan') ? "selected" : "" ?>>TKJ</option>
                <option <?php echo ($jurusan == 'Desain Komunikasi Visual') ? "selected" : "" ?>>DKV</option>
                <option <?php echo ($jurusan == 'Sistem Komunikasi dan Jaringan') ? "selected" : "" ?>>SIJA</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" value="simpan" name="submit">
        </div>
    </form>
</body>

</html>