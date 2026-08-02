<?php

$id = $_POST['id'];

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';

$data = mysqli_fetch_assoc(
    mysqli_query(
        $koneksi,
        "SELECT nama_rak FROM rak WHERE id='$id'"
    )
);

$nama_rak = $data['nama_rak'];

mysqli_query(
    $koneksi,
    "DELETE FROM rak WHERE id='$id'"
);

simpanLog(
    $koneksi,
    "Rak",
    "Menghapus rak $nama_rak"
);

session_start();
$_SESSION['alert']['success'] = "Data berhasil dihapus.";

header('location:../index.php?page=data_rak');