<?php
include 'model.php'; 

function tambahData($nama, $jurusan, $angkatan) {
    return Mahasiswa::tambahData($nama, $jurusan, $angkatan);
}

function lihatData() {
    return Mahasiswa::lihatData();
}

function ambilDataById($id) {
    return Mahasiswa::ambilDataById($id);
}

function editData($id, $nama, $jurusan, $angkatan) {
    return Mahasiswa::editData($id, $nama, $jurusan, $angkatan);
}

function hapusData($id) {
    return Mahasiswa::hapusData($id);
}
?>
