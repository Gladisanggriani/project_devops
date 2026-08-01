<?php
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';

function aman($val) {
    global $koneksi;
    return mysqli_real_escape_string($koneksi, trim($val));
}

$id           = aman($_POST['id']);
$nama_barang  = aman($_POST['nama_barang']);
$id_kategori  = aman($_POST['id_kategori']);
$id_rak       = aman($_POST['id_rak']);
$harga        = aman($_POST['harga']);
$stok         = aman($_POST['stok']);
$expired_date = aman($_POST['expired_date']);

if (
    empty($nama_barang) || empty($id_kategori) || empty($id_rak) ||
    empty($harga) || empty($stok) || empty($expired_date)
) {
    echo "<script>alert('Data tidak boleh kosong!'); window.location.href = '../index.php?page=edit_barang&id=$id';</script>";
    exit;
}

$old = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM barang WHERE id = '$id'"));
$gambar = $old['gambar'];

if (!empty($_FILES['gambar']['name'])) {
    $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
        echo "<script>alert('Hanya gambar JPG, PNG, atau WEBP yang diperbolehkan!'); window.location.href = '../index.php?page=edit_barang&id=$id';</script>";
        exit;
    }

    // Hapus gambar lama
    if (!empty($gambar) && file_exists("../assets/uploads/$gambar")) {
        unlink("../assets/uploads/$gambar");
    }

    $gambar = uniqid() . '.' . $ext;
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/uploads/$gambar");
}

$sql = "UPDATE barang SET 
            nama_barang='$nama_barang',
            id_kategori='$id_kategori',
            id_rak='$id_rak',
            harga='$harga',
            stok='$stok',
            expired_date='$expired_date',
            gambar='$gambar'
        WHERE id='$id'";
mysqli_query($koneksi, $sql);



$_SESSION['alert']['success'] = 'Data barang berhasil diedit';
header("Location: ../index.php?page=data_barang");
exit;
