<style>
    @media print {
        .no-print {
            display: none !important;
        }
    }
</style>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "swalayan_gl");

// Cek apakah parameter ID tersedia
if (!isset($_GET['id'])) {
    echo "ID penjualan tidak ditemukan";
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

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1"></div>
            <div class="d-flex justify-content-end">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><a class="link-fx" href="index.php?page=dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="link-fx" href="index.php?page=penjualan">Penjualan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Laporan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="content ">
    <div class="d-flex justify-content-center">
        <div id="invoiceArea ">
            <div class="block block-rounded col-12">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Struk Transaksi</h3>
                </div>
                <div class="block-content">
                    <div class="p-sm-4 p-xl-4">
                        <!-- Info Toko dan Pembeli -->
                        <div class="row mb-2">
                            <div class="col-6 fs-sm">
                                <div class="align-items-center">
                                    <img src="assets/media/photos/gl.png" alt="Logo" style="width: 100px; height: 100px; object-fit: contain;">
                                    <p class="h3 mb-0">Swalayan</p>
                                </div>
                                <address>
                                    Jl. Teratai Gg. Aur Kuning<br>
                                    Dumai Kota, Riau 28811<br>
                                    Email: gladisanggraini4@gmail.com
                                </address>
                            </div>
                            <div class="col-6 text-end fs-sm">
                                <p class="h3">Pembeli</p>
                                <address>
                                    ID Transaksi: <?= $penjualan['id'] ?><br>
                                    Tanggal: <?= date('d-m-Y H:i', strtotime($penjualan['tanggal'])) ?><br>
                                </address>
                            </div>
                        </div>

                        <!-- Tabel Barang -->
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 60px;">#</th>
                                        <th>Nama Barang</th>
                                        <th class="text-center" style="width: 90px;">Jumlah</th>
                                        <th class="text-end" style="width: 120px;">Harga</th>
                                        <th class="text-end" style="width: 120px;">Total</th>
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
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td>
                                                <p class="fw-semibold mb-1"><?= $row['nama_barang'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge rounded-pill bg-primary"><?= $row['qty'] ?></span>
                                            </td>
                                            <td class="text-end">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></td>
                                            <td class="text-end">Rp. <?= number_format($total, 0, ',', '.') ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                    <tr>
                                        <td colspan="4" class="fw-semibold text-end">Total Bayar</td>
                                        <td class="fw-semibold text-end">Rp. <?= number_format($total_semua, 0, ',', '.') ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Footer -->
                        <p class="fs-sm text-muted text-center">
                            Terimakasih telah berbelanja di GL Swalayan. Silakan datang kembali!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END Invoice -->
    <div class="container">
        <div class="col-md-9 text-end">
            <a href="index.php?page=laporan" class="btn btn-secondary">Kembali</a>
            <button type="button" onclick="downloadPDF()" class=" btn btn-secondary">
                <i class="si si-printer me-1"></i> Cetak Struk
            </button>
        </div>
    </div>
    <br><br>
</div>