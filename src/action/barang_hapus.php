<?php 
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$cek = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM barang WHERE id = '$id'"));
if (!empty($cek['gambar']) && file_exists("../assets/uploads/" . $cek['gambar'])) {
    unlink("../assets/uploads/" . $cek['gambar']);
}

mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");
$_SESSION['alert']['success'] = "Data berhasil dihapus.";
header('location:../index.php?page=data_barang');
?>
