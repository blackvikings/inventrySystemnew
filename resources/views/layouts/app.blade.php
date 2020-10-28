<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/jquery-bar-rating/css-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/demo_2/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ asset('public/assets/images/logo.svg') }}" alt="logo" />
                <span class="font-12 d-block font-weight-light">Responsive Dashboard </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                  <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="{{ asset('public/assets/images/faces/face1.jpg') }}" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> Olson jass </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-shopping"></i>
                  <span class="menu-title">Products</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Product List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Print Barcode</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Add Adjustment</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Stock Count</a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-credit-card"></i>
                  <span class="menu-title">Purchase</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Purchase List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Add Purchase</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Import Purchase By CSV</a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-cart-plus"></i>
                  <span class="menu-title">Sales</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Sale List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Add Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Import Sale By CSV </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Delivery List</a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-wallet"></i>
                  <span class="menu-title">Expense</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Expense Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Expense List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Add Expense</a>
                    </li>
                  </ul>
                </div>
              </li>

              
              <li class="nav-item">
                <div class="nav-link d-flex">
                  <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                  <div class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-toggle="dropdown"> English </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                    </div>
                  </div>
                  <a class="text-white" href="index.html"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li>


            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->
      @yield('content')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('public/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('public/assets/js/misc.js') }}"></script>
    <script src="{{ asset('public/assets/js/settings.js') }}"></script>
    <script src="{{ asset('public/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>