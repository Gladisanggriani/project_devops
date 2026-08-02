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
       
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 3. CODINGAN KATEGORI                                                                       -->
        <!-- ========================================================================================== -->
        
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 4. CODINGAN JUMLAH RAK                                                                     -->
        <!-- ========================================================================================== -->
        
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 5. CODINGAN TERJUAL HARI INI                                                               -->
        <!-- ========================================================================================== -->
        
        <!-- ========================================================================================== -->

    </div>

    <!-- ========================================================================================== -->
    <!-- 6. KELOLA MASTER DATA, PUSAT DATA, DAN DATA KATEGORI                                       -->
    <!-- ========================================================================================== -->
    
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 7. CODINGAN DATA RAK                                                                       -->
        <!-- ========================================================================================== -->
       
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 8. CODINGAN DATA BARANG                                                                    -->
        <!-- ========================================================================================== -->
       
        <!-- ========================================================================================== -->
    </div>

    <!-- ========================================================================================== -->
    <!-- 9. CODINGAN TRANSAKSI & KEUANGAN, LIVE SYSTEM, MENU KASIR, MULAI PENJUALAN                 -->
    <!-- ========================================================================================== -->
   
        <!-- ========================================================================================== -->

        <!-- ========================================================================================== -->
        <!-- 10. CODINGAN LAPORAN HARIAN                                                                -->
        <!-- ========================================================================================== -->
       
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