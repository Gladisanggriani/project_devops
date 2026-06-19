<?php 
$id = $_POST['id'];
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$sql = "DELETE FROM kategori WHERE id=$id";
mysqli_query($koneksi, $sql);

session_start();
$_SESSION['alert']['success'] = "Data berhasil di hapus.";

header('location:../index.php?page=data_kategori');
?>