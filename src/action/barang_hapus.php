<?php 
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$cek = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM barang WHERE id = '$id'"));
if (!empty($cek['gambar']) && file_exists("../assets/uploads/" . $cek['gambar'])) {
    unlink("../assets/uploads/" . $cek['gambar']);
    $nama_barang = $cek['nama_barang'];
}

mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

simpanLog(
    $koneksi,
    "Barang",
    "Menghapus barang $nama_barang"
);

$_SESSION['alert']['success'] = "Data berhasil dihapus.";
header('location:../index.php?page=data_barang');
?>
