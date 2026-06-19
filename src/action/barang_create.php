<?php
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');

function aman($val) {
    global $koneksi;
    return mysqli_real_escape_string($koneksi, trim($val));
}

$nama         = aman($_POST['nambar']);
$id_kategori  = aman($_POST['id_kategori']);
$id_rak       = aman($_POST['id_rak']);
$harga        = aman($_POST['harga']);
$stok         = aman($_POST['stok']);
$expired_date = aman($_POST['expired_date']);

if (
    empty($nama) || empty($id_kategori) || empty($id_rak) ||
    empty($harga) || empty($stok) || empty($expired_date)
) {
    echo "<script>alert('Data tidak boleh kosong!'); window.location.href = '../index.php?page=buat_barang';</script>";
    exit;
}

$gambar = "";
if (!empty($_FILES['gambar']['name'])) {
    $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
        echo "<script>alert('Hanya gambar JPG, PNG, atau WEBP yang diperbolehkan!'); window.location.href = '../index.php?page=buat_barang';</script>";
        exit;
    }

    $gambar = uniqid() . '.' . $ext;
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/uploads/" . $gambar);
}

$sql = "INSERT INTO barang (nama_barang, id_kategori, id_rak, harga, stok, gambar, expired_date) 
        VALUES ('$nama', '$id_kategori', '$id_rak', '$harga', '$stok', '$gambar', '$expired_date')";
mysqli_query($koneksi, $sql);

$_SESSION['alert']['success'] = "Data baru berhasil dibuat.";
header('location:../index.php?page=data_barang');
