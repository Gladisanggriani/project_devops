<?php
$id = $_REQUEST['id'];
$koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');

// Ambil data barang
$sql = "SELECT * FROM barang WHERE id=$id";
$obj = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($obj);

// Ambil semua kategori dan rak untuk <select>
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$rak = mysqli_query($koneksi, "SELECT * FROM rak");
?>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1"></div>
            <div class="d-flex justify-content-end">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="index.php?page=dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Edit Barang
                        </li>
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="index.php?page=data_barang">Data Barang</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-rounded col-lg-">
        <div class="block-header block-header-default">
            <h3 class="block-title"><b>Edit Data Barang</b></h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="action/barang_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="mb-4">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang'] ?>" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <?php while ($k = mysqli_fetch_array($kategori)) { ?>
                                    <option value="<?= $k['id'] ?>" <?= ($k['id'] == $data['id_kategori']) ? 'selected' : '' ?>>
                                        <?= $k['nama_kategori'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Rak</label>
                            <select name="id_rak" class="form-control" required>
                                <?php while ($r = mysqli_fetch_array($rak)) { ?>
                                    <option value="<?= $r['id'] ?>" <?= ($r['id'] == $data['id_rak']) ? 'selected' : '' ?>>
                                        <?= $r['nama_rak'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" class="form-control" value="<?= $data['stok'] ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Gambar (Opsional)</label>
                            <input type="file" name="gambar" class="form-control">
                            <?php if (!empty($data['gambar'])) { ?>
                                <img src="assets/uploads/<?= $data['gambar'] ?>" width="80" class="mt-2">
                            <?php } ?>
                        </div>

                        <div class="mb-4 col-md-4">
                            <label class="form-label">Tanggal Expired</label>
                            <input type="date" name="expired_date" class="form-control" value="<?= $data['expired_date'] ?>" required>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.querySelector('form');

                            form.addEventListener('submit', function(e) {
                                const nama = form.nama_barang.value.trim();
                                const kategori = form.id_kategori.value;
                                const rak = form.id_rak.value;
                                const harga = form.harga.value.trim();
                                const stok = form.stok.value.trim();
                                const expired = form.expired_date.value;

                                if (!nama || !kategori || !rak || !harga || !stok || !expired) {
                                    alert("Semua field wajib diisi!");
                                    e.preventDefault();
                                    return;
                                }

                                if (kategori === 'Pilih Kategori' || rak === 'Pilih Rak') {
                                    alert("Silakan pilih kategori dan rak yang valid.");
                                    e.preventDefault();
                                    return;
                                }

                                if (harga <= 0 || stok < 0) {
                                    alert("Harga harus > 0 dan Stok tidak boleh negatif.");
                                    e.preventDefault();
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>