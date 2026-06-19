<?php
$koneksi = mysqli_connect("localhost", "root", "", "swalayan_gl");

// Cek apakah parameter ID tersedia
if (!isset($_GET['id'])) {
    echo "ID penjualan tidak ditemukan.";
    exit;
}

$id_penjualan = $_GET['id'];

// Ambil data penjualan
$penjualan_q = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE id = '$id_penjualan'");
$penjualan = mysqli_fetch_assoc($penjualan_q);

if (!$penjualan) {
    echo "Data penjualan tidak ditemukan.";
    exit;
}

// Ambil data detail penjualan dan barang terkait
$detail_q = mysqli_query($koneksi, "
    SELECT dp.*, b.nama_barang, b.harga 
    FROM detail_penjualan dp
    JOIN barang b ON dp.id_barang = b.id
    WHERE dp.id_penjualan = '$id_penjualan'
");
?>

<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Detail Transaksi Penjualan</h3>
        </div>
        <div class="block-content">
            <p><strong>ID Transaksi:</strong> <?= $penjualan['id'] ?></p>
            <p><strong>Tanggal:</strong> <?= date('d-m-Y H:i', strtotime($penjualan['tanggal'])) ?></p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Harga</th>
                            <th class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $total_semua = 0;
                        while ($row = mysqli_fetch_assoc($detail_q)):
                            $total = $row['qty'] * $row['harga'];
                            $total_semua += $total;
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama_barang'] ?></td>
                            <td class="text-center"><?= $row['qty'] ?></td>
                            <td class="text-end">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></td>
                            <td class="text-end">Rp. <?= number_format($total, 0, ',', '.') ?></td>
                        </tr>
                        <?php endwhile; ?>
                        <tr class="table-success">
                            <td colspan="4" class="text-end"><strong>Total Bayar</strong></td>
                            <td class="text-end"><strong>Rp. <?= number_format($total_semua, 0, ',', '.') ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-end">
                <a href="index.php?page=laporan" class="btn btn-secondary">Kembali</a>
            </div>
            <br>
        </div>
    </div>
</div>
