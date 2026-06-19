<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$sql = "SELECT barang.*, kategori.nama_kategori, rak.nama_rak 
        FROM barang 
        JOIN kategori ON barang.id_kategori = kategori.id 
        JOIN rak ON barang.id_rak = rak.id";

$obj = mysqli_query($koneksi, $sql);
$jumlah_baris = isset($_POST['jumlah_baris']) ? $_POST['jumlah_baris'] : 1;
if (isset($_POST['tambah_baris'])) {
    $jumlah_baris++;
}
$barang_id = $_POST['id_barang'] ?? [];
$qty = $_POST['qty'] ?? [];
$total_semua = 0;
?>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1"></div>
            <div class="d-flex justify-content-end">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><a class="link-fx" href="index.php?page=dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Penjualan</li>
                        <li class="breadcrumb-item"><a class="link-fx" href="index.php?page=laporan">Laporan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($_GET['success']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($_GET['error']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>


    <form method="POST">
        <input type="hidden" name="jumlah_baris" value="<?= $jumlah_baris ?>">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Transaksi Penjualan</h3>
                <div class="block-options">
                    <input type="datetime-local" name="tanggal" class="form-control" value="<?= $_POST['tanggal'] ?? date('Y-m-d\TH:i') ?>">
                </div>
            </div>

            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-borderless table-striped table-vcenter fs-sm">
                        <thead>
                            <tr class="table-dark">
                                <th class="text-center" style="width: 100px;">No</th>
                                <th>Nama Barang</th>
                                <th class="text-center">QTY</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < $jumlah_baris; $i++): ?>
                                <?php
                                $id_barang = $barang_id[$i] ?? '';
                                $jumlah = $qty[$i] ?? 1;

                                $barang_query = "SELECT barang.*, kategori.nama_kategori, rak.nama_rak 
                                                FROM barang 
                                                JOIN kategori ON barang.id_kategori = kategori.id 
                                                JOIN rak ON barang.id_rak = rak.id 
                                                WHERE barang.id = '$id_barang'";
                                $barang_obj = mysqli_query($koneksi, $barang_query);
                                $barang_data = mysqli_fetch_assoc($barang_obj);

                                $harga = $barang_data['harga'] ?? 0;
                                $total = $jumlah * $harga;
                                $total_semua += $total;
                                ?>
                                <tr>
                                    <td class="text-center"><?= $i + 1 ?></td>
                                    <td>
                                        <select name="id_barang[]" class="form-select">
                                            <option class="text-center" value="">-- Pilih Barang --</option>
                                            <?php
                                            mysqli_data_seek($obj, 0);
                                            while ($data = mysqli_fetch_assoc($obj)) {
                                                $selected = ($data['id'] == $id_barang) ? 'selected' : '';
                                                echo "<option value='{$data['id']}' $selected>
                                                    {$data['nama_barang']} | {$data['nama_kategori']} | {$data['nama_rak']}
                                                </option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="qty[]" value="<?= $jumlah ?>" min="1" class="form-control text-center">
                                    </td>
                                    <td class="text-end">
                                        Rp. <?= number_format($total, 0, ',', '.') ?>
                                        <input type="hidden" name="total[]" value="<?= $total ?>">
                                    </td>
                                </tr>
                            <?php endfor; ?>
                            <tr class="table-success">
                                <td colspan="3" class="text-end text-uppercase"><strong>Total Jumlah :</strong></td>
                                <td class="text-end"><strong>Rp. <?= number_format($total_semua, 0, ',', '.') ?></strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex flex-column align-items-end gap-2">
                        <div class="d-flex justify-content-between w-100">
                            <button type="submit" name="tambah_baris" class="btn btn-sm btn-danger">
                                <i class="fa fa-plus me-1"></i>
                            </button>
                            <button type="submit" formaction="action/penjualaan_transaksi.php" class="btn btn-dark">Simpan</button>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>
</div>