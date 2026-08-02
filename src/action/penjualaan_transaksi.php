<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
require_once 'log_helper.php';

if (
    empty($_POST['tanggal']) ||
    empty($_POST['id_barang']) ||
    empty($_POST['qty']) ||
    !is_array($_POST['id_barang']) ||
    !is_array($_POST['qty'])
) {
    $pesan = urlencode("Input tidak valid.");
    header("Location: ../index.php?page=penjualan&error=$pesan");
    exit;
}

$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
$barang_id = $_POST['id_barang'];
$qty = $_POST['qty'];

// Simpan data penjualan
mysqli_query(
    $koneksi,
    "INSERT INTO penjualan (tanggal) VALUES ('$tanggal')"
);

$id_penjualan = mysqli_insert_id($koneksi);

foreach ($barang_id as $i => $id_barang) {

    $id_barang = intval($id_barang);
    $jumlah = intval($qty[$i]);

    if ($id_barang <= 0 || $jumlah <= 0) {
        continue;
    }

    // Cek stok barang
    $stok_result = mysqli_query(
        $koneksi,
        "SELECT nama_barang, stok
         FROM barang
         WHERE id = '$id_barang'"
    );

    $stok_data = mysqli_fetch_assoc($stok_result);

    $nama_barang = $stok_data['nama_barang'];
    $stok_ada = $stok_data['stok'] ?? 0;

    // Jika stok tidak cukup
    if ($stok_ada < $jumlah) {

        mysqli_query(
            $koneksi,
            "DELETE FROM penjualan
             WHERE id = '$id_penjualan'"
        );

        $pesan = urlencode(
            "Stok tidak mencukupi untuk $nama_barang. Tersisa $stok_ada"
        );

        header(
            "Location: ../index.php?page=penjualan&error=$pesan"
        );
        exit;
    }

    // Simpan detail penjualan
    mysqli_query(
        $koneksi,
        "INSERT INTO detail_penjualan
        (id_penjualan, id_barang, qty)
        VALUES
        ('$id_penjualan', '$id_barang', '$jumlah')"
    );

    // Kurangi stok barang
    mysqli_query(
        $koneksi,
        "UPDATE barang
         SET stok = stok - $jumlah
         WHERE id = '$id_barang'"
    );
}

/*
|--------------------------------------------------------------------------
| Activity Log
|--------------------------------------------------------------------------
*/
simpanLog(
    $koneksi,
    "Transaksi",
    "Membuat transaksi penjualan #$id_penjualan"
);

$pesan = urlencode("Transaksi penjualan berhasil disimpan.");

header(
    "Location: ../index.php?page=laporan&success=$pesan"
);
exit;

?>