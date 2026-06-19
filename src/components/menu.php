      <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual d-block text-center w-100" href="index.php">
              <span class="smini-visible">
                  <i class="fa fa-circle-notch text-primary"></i>
              </span>
              <!-- <img src="assets/media/photos/gl.png" alt="Logo GL Swalayan" height="35"> -->
              <span class="smini-hide fs-5 tracking-wider ">Swalayan</span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div class="d-flex align-items-center gap-1">
              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <div class="dropdown">
                  <div class="dropdown-menu dropdown-menu-end smini-hide border-0" aria-labelledby="sidebar-dark-mode-dropdown">
                      <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
                          <i class="far fa-sun fa-fw opacity-50"></i>
                          <span class="fs-sm fw-medium">Light</span>
                      </button>
                  </div>
              </div>
              <!-- END Dark Mode -->

              <!-- Options -->
              <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-brush"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                      <!-- Color Themes -->
                      <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default">
                          <span>Default</span>
                          <i class="fa fa-circle text-default"></i>
                      </button>
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css">
                          <span>Amethyst</span>
                          <i class="fa fa-circle text-amethyst"></i>
                      </button>
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css">
                          <span>City</span>
                          <i class="fa fa-circle text-city"></i>
                      </button>
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css">
                          <span>Flat</span>
                          <i class="fa fa-circle text-flat"></i>
                      </button>
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css">
                          <span>Modern</span>
                          <i class="fa fa-circle text-modern"></i>
                      </button>
                      <button class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css">
                          <span>Smooth</span>
                          <i class="fa fa-circle text-smooth"></i>
                      </button>
                      <!-- END Color Themes -->
                  </div>
              </div>
              <!-- END Options -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                  <i class="fa fa-fw fa-times"></i>
              </a>
              <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
              <ul class="nav-main">
                  <?php $page = $_GET['page'] ?? 'dashboard'; ?>
                  <?php $currentPage = isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : 'dashboard'; ?>

                  <li class="nav-main-item">
                      <a class="nav-main-link <?= $page == 'dashboard' ? 'active' : '' ?>" href="index.php?page=dashboard">
                          <i class="nav-main-link-icon si si-speedometer"></i>
                          <span class="nav-main-link-name">Dashboard</span>
                      </a>
                  </li>

                  <li class="nav-main-item <?= in_array($page, ['buat_kategori', 'data_kategori']) ? 'open' : '' ?>">
                      <a class="nav-main-link nav-main-link-submenu <?= in_array($page, ['buat_kategori', 'data_kategori']) ? 'active' : '' ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                          <i class="nav-main-link-icon si si-bag"></i>
                          <span class="nav-main-link-name">Kategori</span>
                      </a>
                      <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'buat_kategori' ? 'active' : '' ?>" href="index.php?page=buat_kategori">
                                  <i class="fas fa-plus-square me-2"></i>
                                  <span class="nav-main-link-name">Buat Kategori</span>
                              </a>
                          </li>
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'data_kategori' ? 'active' : '' ?>" href="index.php?page=data_kategori">
                                  <i class="fas fa-layer-group me-2"></i>
                                  <span class="nav-main-link-name">Data Kategori</span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-main-item <?= in_array($page, ['buat_rak', 'data_rak']) ? 'open' : '' ?>">
                      <a class="nav-main-link nav-main-link-submenu <?= in_array($page, ['buat_rak', 'data_rak']) ? 'active' : '' ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <i class="nav-main-link-icon fas fa-archive"></i>
                          <span class="nav-main-link-name">Rak</span>
                      </a>
                      <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'buat_rak' ? 'active' : '' ?>" href="index.php?page=buat_rak">
                                  <i class="fas fa-plus-square me-2"></i>
                                  <span class="nav-main-link-name">Buat Rak</span>
                              </a>
                          </li>
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'data_rak' ? 'active' : '' ?>" href="index.php?page=data_rak">
                                  <i class="fas fa-layer-group me-2"></i>
                                  <span class="nav-main-link-name">Data Rak</span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-main-item <?= in_array($page, ['buat_barang', 'data_barang']) ? 'open' : '' ?>">
                      <a class="nav-main-link nav-main-link-submenu <?= in_array($page, ['buat_barang', 'data_barang']) ? 'active' : '' ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <i class="nav-main-link-icon si si-bag"></i>
                          <span class="nav-main-link-name">Barang</span>
                      </a>
                      <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'buat_barang' ? 'active' : '' ?>" href="index.php?page=buat_barang">
                                  <i class="fas fa-plus-square me-2"></i>
                                  <span class="nav-main-link-name">Buat Barang</span>
                              </a>
                          </li>
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'data_barang' ? 'active' : '' ?>" href="index.php?page=data_barang">
                                  <i class="fas fa-layer-group me-2"></i>
                                  <span class="nav-main-link-name">Data Barang</span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-main-item <?= in_array($page, ['penjualan', 'laporan']) ? 'open' : '' ?>">
                      <a class="nav-main-link nav-main-link-submenu <?= in_array($page, ['penjualan', 'laporan']) ? 'active' : '' ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <i class="nav-main-link-icon fas fa-exchange-alt"></i>
                          <span class="nav-main-link-name">Transakasi</span>
                      </a>
                      <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'penjualan' ? 'active' : '' ?>" href="index.php?page=penjualan">
                                  <i class="nav-main-link-icon fa fa-magnifying-glass-dollar"></i>
                                  <span class="nav-main-link-name">Penjualan</span>
                              </a>
                          </li>
                          <li class="nav-main-item">
                              <a class="nav-main-link <?= $page == 'laporan' ? 'active' : '' ?>" href="index.php?page=laporan">
                                  <i class="nav-main-link-icon fa fa-magnifying-glass-chart"></i>
                                  <span class="nav-main-link-name">Laporan</span>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>

      </div>