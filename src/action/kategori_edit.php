<?php 
session_start();
$nama = trim($_POST['namkat']);
$id = $_POST['id'];

if (empty($nama)) {
    $_SESSION['alert']['error'] = "Data tidak boleh kosong.";
    header("Location: ../index.php?page=buat_kategori_edit&id=$id");
    exit();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$sql = "UPDATE kategori SET nama_kategori='$nama' WHERE id=$id";
mysqli_query($koneksi, $sql);
$_SESSION['alert']['success'] = "Data berhasil diubah.";
header('location:../index.php?page=data_kategori');