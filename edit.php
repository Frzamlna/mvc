<?php
include 'controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    if (editData($id, $nama, $jurusan, $angkatan)) {
        echo "Data berhasil diupdate! <br>";
    } else {
        echo "Error: Data gagal diupdate.";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = ambilDataById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required><br>

        <label for="angkatan">Angkatan:</label>
        <input type="number" name="angkatan" value="<?php echo $data['angkatan']; ?>" required><br>

        <button type="submit">Update Data</button>
    </form>

    <a href="index.php"><button>Kembali ke Lihat Data</button></a>
</body>
</html>
