    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <!-- <h1 class="h3 fw-bold mb-1">
                        DataTables
                    </h1>
                    <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                        Tables transformed with dynamic features.
                    </h2> -->
                </div>
                <div class="d-flex justify-content-end">
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="index.php?page=dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Edit Kategori
                            </li>
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="index.php?page=data_kategori">Data Kategori</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['alert']['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_SESSION['alert']['error'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php unset($_SESSION['alert']['error']);
        endif; ?>

        <div class="block block-rounded col-lg-4">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Buat Data Kategori</b></h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col space-y-5">
                        <form action="action/kategori_edit.php" method="POST">
                            <?php
                            $id = $_REQUEST['id'];
                            $koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
                            $sql = "SELECT nama_kategori FROM kategori WHERE id=$id";
                            $obj = mysqli_query($koneksi, $sql);
                            $ary = mysqli_fetch_array($obj);

                            ?>
                            <div class="mb-4">
                                <label class="form-label" for="">Nama Kategori</label>
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="text" class="form-control" name="namkat" value="<?= $ary['nama_kategori'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Labels on top -->
    </div>