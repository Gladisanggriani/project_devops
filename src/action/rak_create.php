<?php 
session_start();
$nama = trim($_POST['namrak']);
$kategori_id = $_POST['kategori_id'];

if (empty($nama) || empty($kategori_id)) {
    $_SESSION['alert']['error'] = "Data tidak boleh kosong.";
    header("Location: ../index.php?page=buat_rak");
    exit();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$sql = "INSERT INTO rak (id, nama_rak, kategori_id) VALUES(null, '$nama', '$kategori_id')";
mysqli_query($koneksi, $sql);

$_SESSION['alert']['success'] = "Data baru berhasil dibuat.";
header('location:../index.php?page=data_rak');
