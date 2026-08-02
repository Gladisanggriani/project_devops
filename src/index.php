<?php
session_start();
?>

<!doctype html>
<html lang="en" class="remember-theme">

<head>
  <?php include('components/head.php') ?>
</head>
<style>
  #page-footer {
    position: fixed !important;
    bottom: 0 !important;
    z-index: 9999 !important;
  }

  @media (min-width: 992px) {
    #page-footer {
      left: 250px !important;
      width: calc(100% - 250px) !important;
    }
  }

  #main-container {
    padding-bottom: 90px !important;
  }
</style>

<body>
  <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <?php include('components/menu.php') ?>
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
      <?php include('components/header.php') ?>
    </header>
    <!-- Main konten -->
    <main id="main-container">
      <?php
      if (!isset($_REQUEST['page'])) {
        $_REQUEST['page'] = 'dashboard';
      }

      include("pages/" . $_REQUEST['page'] . ".php");
      ?>

    </main>

    <footer id="page-footer" class="bg-body-light border-top">
      <?php include('components/footer.php') ?>
    </footer>
  </div>
  <?php include('components/script.php') ?>
</body>

</html>


<?php
unset($_SESSION['alert']);
?>