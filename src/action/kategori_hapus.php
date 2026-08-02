<?php

$id = $_POST['id'];

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';

$data = mysqli_fetch_assoc(
    mysqli_query(
        $koneksi,
        "SELECT nama_kategori FROM kategori WHERE id='$id'"
    )
);

$nama_kategori = $data['nama_kategori'];

mysqli_query(
    $koneksi,
    "DELETE FROM kategori WHERE id='$id'"
);

simpanLog(
    $koneksi,
    "Kategori",
    "Menghapus kategori $nama_kategori"
);

session_start();
$_SESSION['alert']['success'] = "Data berhasil dihapus.";

header('location:../index.php?page=data_kategori');