<?php 
session_start();
$nama = trim($_POST['namrak']);
$kategori_id = $_POST['kategori_id'];
$id = $_POST['id'];

if (empty($nama) || empty($kategori_id)) {
    $_SESSION['alert']['error'] = "Data tidak boleh kosong.";
    header("Location: ../index.php?page=buat_rak_edit&id=$id");
    exit();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$sql = "UPDATE rak SET nama_rak='$nama', kategori_id='$kategori_id' WHERE id=$id";
mysqli_query($koneksi, $sql);

$_SESSION['alert']['success'] = "Data berhasil diubah.";
header('location:../index.php?page=data_rak');
