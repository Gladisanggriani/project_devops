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
                        <li class="breadcrumb-item" aria-current="page">Buat Barang</li>
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
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Buat Barang</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <?php
                    $koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
                    $sql_kategori = "SELECT * FROM kategori";
                    $result_kategori = mysqli_query($koneksi, $sql_kategori);

                    $sql_rak = "SELECT * FROM rak";
                    $result_rak = mysqli_query($koneksi, $sql_rak);
                    ?>

                    <form id="formBarang" action="action/barang_create.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nambar" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" id="id_kategori" name="id_kategori" required>
                                <option value="" selected disabled>Pilih Kategori</option>
                                <?php while ($kat = mysqli_fetch_array($result_kategori)) { ?>
                                    <option value="<?= $kat['id'] ?>"><?= $kat['nama_kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Rak</label>
                            <select class="form-select" id="id_rak" name="id_rak" required>
                                <option value="" selected disabled>Pilih Rak</option>
                                <?php while ($rak = mysqli_fetch_array($result_rak)) { ?>
                                    <option value="<?= $rak['id'] ?>"><?= $rak['nama_rak'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" class="form-control" name="harga" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" min="0" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>

                        <div class="mb-4 col-md-4">
                            <label class="form-label">Expired Date</label>
                            <input type="date" class="form-control" name="expired_date" required>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </div>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.getElementById('formBarang');

                            form.addEventListener('submit', function(e) {
                                const nama = form.nambar.value.trim();
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

                                if (kategori === "" || rak === "") {
                                    alert("Silakan pilih kategori dan rak.");
                                    e.preventDefault();
                                    return;
                                }

                                if (harga <= 0 || stok < 0) {
                                    alert("Harga harus lebih dari 0 dan stok tidak boleh negatif.");
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