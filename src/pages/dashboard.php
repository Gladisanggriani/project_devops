<!-- Dashboard Content (Lebih Ramai & Interaktif) -->
<div class="content">

    <!-- Toggle Side Content (Mobile) -->
    <div class="d-xl-none push mb-4">
        <div class="row g-2">
            <div class="col-6">
                <button type="button" class="btn btn-light shadow-sm w-100" data-toggle="class-toggle" data-target=".js-ecom-div-filters" data-class="d-none">
                    <i class="fa fa-fw fa-filter text-primary me-1"></i> Filters
                </button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-light shadow-sm w-100" data-toggle="class-toggle" data-target=".js-ecom-div-cart" data-class="d-none">
                    <i class="fa fa-fw fa-shopping-cart text-primary me-1"></i> Cart (3)
                </button>
            </div>
        </div>
    </div>
    <!-- END Toggle Side Content -->

    <!-- ========================================================================================== -->
    <!-- 1 & 10. CODINGAN DASHBOARD SWALAYAN & DATA, PANTAU STOK, DAN PROSES TRANSAKSI              -->
    <!-- ========================================================================================== -->
   <div class="row mb-4">
        <div class="col-12">
            <div class="block block-rounded block-transparent bg-gd-dusk shadow-sm mb-0">
                <div class="block-content block-content-full bg-black-50 p-4 rounded text-center">
                    <h2 class="fw-bold text-white mb-2 text-uppercase">
                        <i class="fa fa-store text-warning me-2 fa-bounce"></i> Dashboard Swalayan
                    </h2>
                    <p class="fs-5 fw-medium text-white-75 mb-0">Kelola master data, pantau stok, dan proses transaksi dengan cepat hari ini!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================================================================== -->

    <!-- Quick Stats (Mini Widget) -->
    <div class="row mb-4 g-3">
        
        <!-- ========================================================================================== -->
        <!-- 2. CODINGAN TOTAL BARANG                                                                   -->
        <!-- ========================================================================================== -->
       <div class="col-6 col-md-3">
            <div class="card shadow-sm border-0 border-bottom border-4 border-success h-100">
                <div class="card-body text-center p-3">
                    <div class="text-success mb-2"><i class="fa fa-boxes fa-2x"></i></div>
                    <div class="fs-4 fw-bold text-dark">128</div>
                    <div class="text-muted fs-sm text-uppercase fw-semibold">Total Barang</div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 3. CODINGAN KATEGORI                                                                       -->
        <!-- ========================================================================================== -->
        <div class="col-6 col-md-3">
            <div class="card shadow-sm border-0 border-bottom border-4 border-primary h-100">
                <div class="card-body text-center p-3">
                    <div class="text-primary mb-2"><i class="fa fa-tags fa-2x"></i></div>
                    <div class="fs-4 fw-bold text-dark">15</div>
                    <div class="text-muted fs-sm text-uppercase fw-semibold">Kategori</div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 4. CODINGAN JUMLAH RAK                                                                     -->
        <!-- ========================================================================================== -->
        <div class="col-6 col-md-3">
            <div class="card shadow-sm border-0 border-bottom border-4 border-warning h-100">
                <div class="card-body text-center p-3">
                    <div class="text-warning mb-2"><i class="fa fa-align-justify fa-2x"></i></div>
                    <div class="fs-4 fw-bold text-dark">8</div>
                    <div class="text-muted fs-sm text-uppercase fw-semibold">Jumlah Rak</div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 5. CODINGAN TERJUAL HARI INI                                                               -->
        <!-- ========================================================================================== -->
         <div class="col-6 col-md-3">
            <div class="card shadow-sm border-0 border-bottom border-4 border-info h-100">
                <div class="card-body text-center p-3">
                    <div class="text-info mb-2"><i class="fa fa-shopping-cart fa-2x"></i></div>
                    <div class="fs-4 fw-bold text-dark">45</div>
                    <div class="text-muted fs-sm text-uppercase fw-semibold">Terjual Hari Ini</div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

    </div>

    <!-- ========================================================================================== -->
    <!-- 6. KELOLA MASTER DATA, PUSAT DATA, DAN DATA KATEGORI                                       -->
    <!-- ========================================================================================== -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold text-dark mb-0"><i class="fa fa-database text-primary me-2"></i>Kelola Master Data</h4>
        <span class="badge bg-primary rounded-pill px-3 py-2 shadow-sm">Pusat Data</span>
    </div>
    
    <div class="row items-push mb-5 g-4">
        <!-- Card Kategori -->
        <div class="col-md-4">
            <div class="card h-100 shadow border-0 transition-hover card-hover-primary">
                <div class="card-body text-center p-4">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-primary-light text-primary rounded-circle p-2"><i class="fa fa-star"></i></span>
                    </div>
                    <div class="item item-circle bg-primary-light text-primary mx-auto mb-3 shadow-sm icon-pulse" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                        <i class="fa fa-tags fa-2x"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Data Kategori</h5>
                    <p class="text-muted text-sm mb-4">Pengelompokan jenis barang agar lebih rapi.</p>
                    <div class="row g-2">
                        <div class="col-6">
                            <a href="index.php?page=buat_kategori" class="btn btn-primary w-100 btn-sm"><i class="fa fa-plus me-1"></i> Tambah</a>
                        </div>
                        <div class="col-6">
                            <a href="index.php?page=data_kategori" class="btn btn-outline-primary w-100 btn-sm"><i class="fa fa-list me-1"></i> Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 7. CODINGAN DATA RAK                                                                       -->
        <!-- ========================================================================================== -->
        <div class="col-md-4">
            <div class="card h-100 shadow border-0 transition-hover card-hover-warning">
                <div class="card-body text-center p-4">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-warning-light text-warning rounded-circle p-2"><i class="fa fa-map-marker-alt"></i></span>
                    </div>
                    <div class="item item-circle bg-warning-light text-warning mx-auto mb-3 shadow-sm icon-pulse" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                        <i class="fa fa-align-justify fa-2x"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Data Rak</h5>
                    <p class="text-muted text-sm mb-4">Tentukan lokasi penempatan barang.</p>
                    <div class="row g-2">
                        <div class="col-6">
                            <a href="index.php?page=buat_rak" class="btn btn-warning text-dark w-100 btn-sm fw-semibold"><i class="fa fa-plus me-1"></i> Tambah</a>
                        </div>
                        <div class="col-6">
                            <a href="index.php?page=data-rak" class="btn btn-outline-warning text-dark border-warning w-100 btn-sm"><i class="fa fa-list me-1"></i> Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 8. CODINGAN DATA BARANG                                                                    -->
        <!-- ========================================================================================== -->
        <div class="col-md-4">
            <div class="card h-100 shadow border-0 transition-hover card-hover-success">
                <div class="card-body text-center p-4">
                    <div class="position-absolute top-0 start-0 p-3">
                        <span class="badge bg-danger pulse-badge">Update Stok!</span>
                    </div>
                    <div class="item item-circle bg-success-light text-success mx-auto mb-3 shadow-sm icon-pulse" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                        <i class="fa fa-boxes fa-2x"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Data Barang</h5>
                    <p class="text-muted text-sm mb-4">Kelola harga, stok, dan detail barang.</p>
                    <div class="row g-2">
                        <div class="col-6">
                            <a href="index.php?page=buat_barang" class="btn btn-success w-100 btn-sm"><i class="fa fa-plus me-1"></i> Tambah</a>
                        </div>
                        <div class="col-6">
                            <a href="index.php?page=data_barang" class="btn btn-outline-success w-100 btn-sm"><i class="fa fa-list me-1"></i> Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================== -->
    </div>

    <!-- ========================================================================================== -->
    <!-- 9. CODINGAN TRANSAKSI & KEUANGAN, LIVE SYSTEM, MENU KASIR, MULAI PENJUALAN                 -->
    <!-- ========================================================================================== -->
   <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold text-dark mb-0"><i class="fa fa-cash-register text-success me-2"></i>Transaksi & Keuangan</h4>
        <span class="badge bg-success rounded-pill px-3 py-2 shadow-sm">Live System</span>
    </div>

    <div class="row items-push g-4">
        <!-- Card Penjualan (Gradient) -->
        <div class="col-md-6">
            <a class="block block-rounded block-link-pop h-100 shadow border-0 bg-gd-sea text-white transition-hover position-relative overflow-hidden" href="index.php?page=penjualan" style="display: block; text-decoration: none;">
                <!-- Decorative background icon -->
                <i class="fa fa-shopping-basket fa-4x position-absolute opacity-25" style="bottom: -10px; right: -10px; transform: rotate(-15deg);"></i>
                <div class="block-content block-content-full d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="fs-sm fw-bold text-uppercase text-white-75 mb-0">Menu Kasir</p>
                        <p class="fs-3 fw-bold text-white mb-2">Mulai Penjualan</p>
                        <span class="badge bg-white text-info fw-bold px-3 py-1"><i class="fa fa-play me-1"></i> Buka Mesin Kasir</span>
                    </div>
                    <div class="p-3 bg-white bg-opacity-25 rounded-circle shadow-sm">
                        <i class="fa fa-desktop fa-3x text-white"></i>
                    </div>
                </div>
            </a>
        </div>
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 10. CODINGAN LAPORAN HARIAN                                                                -->
        <!-- ========================================================================================== -->
       <div class="col-md-6">
            <a class="block block-rounded block-link-pop h-100 shadow border-0 bg-gd-sun text-white transition-hover position-relative overflow-hidden" href="index.php?page=laporan" style="display: block; text-decoration: none;">
                <!-- Decorative background icon -->
                <i class="fa fa-chart-pie fa-4x position-absolute opacity-25" style="bottom: -10px; right: -10px; transform: rotate(15deg);"></i>
                <div class="block-content block-content-full d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="fs-sm fw-bold text-uppercase text-white-75 mb-0">Rekapitulasi</p>
                        <p class="fs-3 fw-bold text-white mb-2">Laporan Harian</p>
                        <span class="badge bg-white text-warning fw-bold px-3 py-1"><i class="fa fa-print me-1"></i> Cetak / Lihat Rekap</span>
                    </div>
                    <div class="p-3 bg-white bg-opacity-25 rounded-circle shadow-sm">
                        <i class="fa fa-chart-line fa-3x text-white"></i>
                    </div>
                </div>
            </a>
        </div>
        <!-- ========================================================================================== -->
    </div>
</div>

<!-- Custom CSS (Membuatnya Ramai & Animasi) -->
<style>
    /* Gradient Backgrounds (Menggunakan warna yang umum di template UI) */
    .bg-gd-dusk { background: linear-gradient(135deg, #1e1e2d 0%, #3a3a5c 100%); }
    .bg-gd-sea { background: linear-gradient(135deg, #2b88d8 0%, #155799 100%); }
    .bg-gd-sun { background: linear-gradient(135deg, #f68084 0%, #a65076 100%); }
    
    /* Light Backgrounds */
    .bg-primary-light { background-color: #e7f0fa; color: #0056b3; }
    .bg-warning-light { background-color: #fff8e5; color: #b38600; }
    .bg-success-light { background-color: #eaf6ec; color: #1e7e34; }

    /* Hover Effects */
    .transition-hover {
        transition: all 0.3s ease-in-out;
    }
    .transition-hover:hover {
        transform: translateY(-7px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .card-hover-primary:hover { border-bottom: 4px solid #0d6efd !important; }
    .card-hover-warning:hover { border-bottom: 4px solid #ffc107 !important; }
    .card-hover-success:hover { border-bottom: 4px solid #198754 !important; }

    /* Animasi Icon Berdenyut */
    @keyframes pulse-icon {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
        }
    .card:hover .icon-pulse {
        animation: pulse-icon 1s infinite;
    }
    
    /* Animasi Badge Berkedip/Berdenyut */
    @keyframes pulse-badge {
        0% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0); }
        100% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0); }
    }
    .pulse-badge {
        animation: pulse-badge 2s infinite;
    }
</style>