<?php
include 'controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    if (tambahData($nama, $jurusan, $angkatan)) {
        echo "Data berhasil ditambahkan! <br>";
    } else {
        echo "Error: Data gagal ditambahkan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambah.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required><br>

        <label for="angkatan">Angkatan:</label>
        <input type="number" name="angkatan" required><br>

        <button type="submit">Simpan Data</button>
    </form>

    <a href="index.php"><button>Kembali ke Lihat Data</button></a>
</body>
</html>
