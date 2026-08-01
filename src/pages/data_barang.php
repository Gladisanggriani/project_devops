
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <!-- Optional Header -->
            </div>
            <div class="d-flex justify-content-end">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="index.php?page=dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="index.php?page=buat_barang">Buat Barang</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Data Barang
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <?php
    if (isset($_SESSION['alert']['success'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_SESSION['alert']['success'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['success']);
    }
    ?>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title"><b>Data Barang</b></h3>
            <div class="block-options">
                <a href="index.php?page=buat_barang">
                    <button type="button" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus me-1"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="block-content block-content-full overflow-x-auto">
            <div class="dt-container dt-bootstrap5 dt-empty-footer">
            <div class="row mt-2 justify-content-between dt-layout-table">
            <div class="col-12 dt-layout-full col-md">
                <table
                    id="DataTables_Table_Barang"
                    class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable">
                    <thead>
                        <tr class="table-dark text-center">
                            <th>No</th>
                            <th>Id</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Rak</th>
                            <th>Stok</th>
                            <th>Expired</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
                        $sql = "SELECT 
                                    b.id,
                                    b.nama_barang,
                                    b.harga,
                                    b.stok,
                                    b.expired_date,
                                    b.gambar,
                                    k.nama_kategori,
                                    r.nama_rak
                                FROM barang b
                                LEFT JOIN kategori k ON b.id_kategori = k.id
                                LEFT JOIN rak r ON b.id_rak = r.id";
                        $obj = mysqli_query($koneksi, $sql);
                        $no = 1;
                        while ($data = mysqli_fetch_array($obj)) {
                        ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td><?= $data['id'] ?></td>
                                <td><?= $data['nama_barang']; ?></td>
                                <td><?= $data['nama_kategori']; ?></td>
                                <td><?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                <td><?= $data['nama_rak']; ?></td>
                                <td><?= $data['stok']; ?></td>
                                <td><?= $data['expired_date']; ?></td>
                                <td>
                                    <?php if (!empty($data['gambar'])) { ?>
                                        <img src="assets/uploads/<?= $data['gambar'] ?>" width="100">
                                    <?php } else {
                                        echo "-";
                                    } ?>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <form action="action/barang_hapus.php" method="post">
                                            <button type="submit" name="id" value="<?= $data['id'] ?>" class="btn btn-sm bg-danger-light text-danger">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </form>
                                        <a href="index.php?page=buat_barang_edit&id=<?= $data['id'] ?>" class="btn btn-sm bg-info-light text-info">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
