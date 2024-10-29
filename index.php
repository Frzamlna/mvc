<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

include 'controller.php';
$result = lihatData(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php"><button>Tambah Data</button></a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Cek jika ada data
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>{$row['angkatan']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'><button>Edit</button></a>
                        <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin ingin menghapus data ini?');\"><button>Hapus</button></a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>
