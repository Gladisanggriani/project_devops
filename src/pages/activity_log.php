<?php

$koneksi = mysqli_connect(
    'localhost',
    'root',
    '',
    'swalayan_gl'
);

$data = mysqli_query(
    $koneksi,
    "SELECT *
     FROM activity_log
     ORDER BY created_at DESC"
);
?>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1"></div>

            <div class="d-flex justify-content-end">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a href="index.php?page=dashboard">
                                Dashboard
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            Activity Log
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
            <h3 class="block-title">
                Activity Log
            </h3>
        </div>

        <div class="block-content">

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Modul</th>
                            <th>Aktivitas</th>
                            <th width="20%">Waktu</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($data)) {
                        ?>

                            <tr>
                                <td><?= $no++ ?></td>

                                <td>
                                    <span class="badge bg-primary">
                                        <?= $row['modul'] ?>
                                    </span>
                                </td>

                                <td>
                                    <?= $row['aktivitas'] ?>
                                </td>

                                <td>
                                    <?= $row['created_at'] ?>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>