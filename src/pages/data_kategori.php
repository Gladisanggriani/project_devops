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

                            <li class="breadcrumb-item">
                                <a class="link-fx" href="index.php?page=buat_kategori">Buat Kategori</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Data Kategori
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
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['alert']['success'] ?>
            </div>
        <?php
        }
        ?>

        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Data Kategori</b></h3>
                <div class="block-options">
                    <a href="index.php?page=buat_kategori">
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus me-1"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="block-content block-content-full overflow-x-auto">
                <div class="table-responsive">
                   <table class="table table-bordered table-hover table-striped table-vcenter js-dataTable-buttons dataTable">
                        <thead>
                            <tr class="table-dark">
                                <th class="text-center">No</th>
                                <th class="text-center">Name Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            // $dataArray = [
                            //     [
                            //         'id' => 1,
                            //         'nama' => "budi",
                            //     ],
                            //     [
                            //         'id' => 2,
                            //         'nama' => "tika",
                            //     ],
                            // ];

                            $koneksi = mysqli_connect('localhost', 'root', '', 'swalayan_gl');
                            $sql = "SELECT * FROM kategori";
                            $obj = mysqli_query($koneksi, $sql);
                            // $ary = mysqli_fetch_array($obj);
                            $no = 1;
                            while ($data = mysqli_fetch_array($obj)) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama_kategori'] ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <form action="action/kategori_hapus.php" method="post">
                                                <button type="submit" name="id" value="<?= $data['id'] ?>" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled px-3 rounded-pill bg-danger-light text-danger" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </form>
                                            <a href="index.php?page=buat_kategori_edit&id=<?= $data['id'] ?>" type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled px-3 rounded-pill bg-info-light text-info" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit">
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
        <!-- END Full Table -->
    </div>