<?php
include 'koneksi.php';

class Mahasiswa {
    public static function tambahData($nama, $jurusan, $angkatan) {
        global $koneksi;
        $sql = "INSERT INTO data_mahasiswa (nama, jurusan, angkatan) VALUES ('$nama', '$jurusan', '$angkatan')";
        return $koneksi->query($sql);
    }

    public static function lihatData() {
        global $koneksi;
        $sql = "SELECT * FROM data_mahasiswa";
        return $koneksi->query($sql);
    }

    public static function ambilDataById($id) {
        global $koneksi;
        $sql = "SELECT * FROM data_mahasiswa WHERE id = $id";
        return $koneksi->query($sql)->fetch_assoc();
    }

    public static function editData($id, $nama, $jurusan, $angkatan) {
        global $koneksi;
        $sql = "UPDATE data_mahasiswa SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' WHERE id=$id";
        return $koneksi->query($sql);
    }

    public static function hapusData($id) {
        global $koneksi;
        $sql = "DELETE FROM data_mahasiswa WHERE id=$id";
        return $koneksi->query($sql);
    }
}
?>
