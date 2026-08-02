<?php 
session_start();
$nama = trim($_POST['namkat']);

if (empty($nama)) {
    $_SESSION['alert']['error'] = "Data tidak boleh kosong.";
    header("Location: ../index.php?page=buat_kategori");
    exit();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';
$sql = "INSERT INTO kategori (nama_kategori) VALUES ('$nama')";
mysqli_query($koneksi, $sql);

simpanLog(
    $koneksi,
    "Kategori",
    "Menambahkan kategori $nama"
);

$_SESSION['alert']['success'] = "Data berhasil ditambahkan.";
header('location:../index.php?page=data_kategori');
