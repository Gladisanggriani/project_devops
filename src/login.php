
<!doctype html>
<html lang="en" class="remember-theme">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>GL Swalayan</title>

  <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="index, follow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
  <meta property="og:site_name" content="OneUI">
  <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="assets/media/photos/logogl.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/media/photos/logogl.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/media/photos/logogl.png">
  <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
  <script src="assets/js/setTheme.js"></script>
</head>

<body>
  <div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="hero-static d-flex align-items-center">
        <div class="content">
          <div class="row justify-content-center push">
            <div class="col-md-8 col-lg-6 col-xl-4">
              <!-- Sign In Block -->
              <div class="block block-rounded mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Sign In</h3>
                  <div class="block-options">
                    <a class="btn-block-option fs-sm" href="op_auth_reminder.html">Forgot Password?</a>
                    <a class="btn-block-option" href="op_auth_signup.html" data-bs-toggle="tooltip" data-bs-placement="left" title="New Account">
                      <i class="fa fa-user-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="block-content">
                  <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                    <h1 class="h2 mb-1">GL Swalayan </h1>
                    <p class="fw-medium text-muted">
                      Welcome, please login.
                    </p>
                    <form class="js-validation-signin" action="index.php?page=dashboard" method="POST">
                      <div class="py-3">
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="login-username" placeholder="Username">
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="login-password" placeholder="Password">
                        </div>
                        <div class="mb-4">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="login-remember" name="login-remember">
                            <label class="form-check-label" for="login-remember">Remember Me</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-6 col-xl-5">
                          <button type="submit" name="submit" class="btn w-100 btn-alt-primary">
                            <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                          </button>
                        </div>
                      </div>
                    </form>
                    <!-- END Sign In Form -->
                  </div>
                </div>
              </div>
              <!-- END Sign In Block -->
            </div>
          </div>
          <div class="fs-sm text-muted text-center">
            <strong>OneUI & Gladis</strong> &copy; <span data-toggle="year-copy"></span>
          </div>
        </div>
    </main>
  </div>
  <script src="assets/js/oneui.app.min.js"></script>

  <!-- jQuery (required for jQuery Validation plugin) -->
  <script src="assets/js/lib/jquery.min.js"></script>

  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

  <!-- Page JS Code -->
  <script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>

</html>
