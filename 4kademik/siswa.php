<?php
include "config/conn.php";
session_start();

if($_SESSION['role'] == "") {
    header("Location: index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <!-- LINK BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>

    <head>
        <h2>Daftar Siswa</h2>
    </head>
    <nav>
        <a href="form_tambahSiswa.php"><button class='btn btn-danger'>[+] Tambah Siswa Baru</button></a>
    </nav>
    <br>

    <table border="1" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM siswa";
            $output = mysqli_query($conn, $query);

            while ($siswa = mysqli_fetch_array($output)) {
                echo "<tr>";

                echo "<td>" . $siswa['id'] . "</td>";
                echo "<td>" . $siswa['nis'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['jenisKelamin'] . "</td>";
                echo "<td>" . $siswa['tanggalLahir'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jurusan'] . "</td>";

                echo "<td>";
                echo "<a href='form_edit_siswa.php?id=" . $siswa['id'] . "' ><button class='btn btn-primary'>EDIT</button> </a>";
                echo "<a href='controller/hapus_siswa.php?id=" . $siswa['id'] . "'><button class='btn btn-success'>HAPUS</button></a> ";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total Siswa: <?php echo mysqli_num_rows($output) ?></p>
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Data Siswa Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Siswa Gagal";
            }
            ?>
        </p>
    <?php endif; ?>
    <form action="controller/logout.php" method="post" class=login-username>
        <div class="input-group">
            <button type="submit" class="btn">LOGOUT</button>
        </div>
    </form>
</body>

</html>