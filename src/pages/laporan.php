<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
$laporan = mysqli_query($koneksi, "
    SELECT p.id AS id_penjualan, p.tanggal, SUM(dp.qty * b.harga) AS total 
    FROM penjualan p
    JOIN detail_penjualan dp ON dp.id_penjualan = p.id
    JOIN barang b ON b.id = dp.id_barang
    GROUP BY p.id, p.tanggal
    ORDER BY p.id DESC 
");

$no = 1;
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

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Laporan Penjualan</h3>
        </div>
        <div class="block-content block-content-full overflow-x-auto">
            <div class="dt-container dt-bootstrap5 dt-empty-footer">
                <div class="row mt-2 justify-content-between dt-layout-table">
                    <div class="col-12 dt-layout-full col-md">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable" id="DataTables_Table_1">
                            <thead>
                                <tr class="table-dark">
                                    <th class="text-center" style="width: 50px;">No</th>
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Total</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Detail</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Cetak</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php while ($row = mysqli_fetch_assoc($laporan)): ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= $row['id_penjualan'] ?></td>
                                        <td><?= date('d-m-Y H:i', strtotime($row['tanggal'])) ?></td>
                                        <td class="d-none d-sm-table-cell">Rp <?= number_format($row['total'], 0, ',', '.') ?></td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="index.php?page=detail_laporan&id=<?= $row['id_penjualan'] ?>"
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning text-decoration-none">
                                                Lihat Detail
                                            </a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="index.php?page=cetak&id=<?= $row['id_penjualan'] ?>" target="_blank"
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success text-decoration-none">
                                                Cetak
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>