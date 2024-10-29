<?php
include 'controller.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (hapusData($id)) {
        echo "Data berhasil dihapus! <br>";
    } else {
        echo "Error: Data gagal dihapus.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Mahasiswa</title>
</head>
<body>
    <h1>Hapus Data Mahasiswa</h1>
    <a href="index.php"><button>Kembali ke Lihat Data</button></a>
</body>
</html>
