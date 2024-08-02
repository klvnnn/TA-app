<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>KKSP - Kearsipan Digital</title>
    <meta 
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no" 
        name="viewport"
    />
    <link 
        rel="icon" 
        href="{{ asset('assets/img/favicon/logo_kksp.png') }}" 
        type="image/x-icon" 
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
    WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
        families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
        sessionStorage.fonts = true;
        },
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
</head>
<body>
    <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard-test') }}" class="logo">
            <img
                src="{{ asset('assets/img/logo/logo-white.png') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="45"
            />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
        </div>
        <!-- Sidebar Content -->
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                <!-- Dashboard -->
                <li class="nav-item active">
                    <a
                    data-bs-toggle="collapse"
                    href="#dashboard"
                    class="collapsed"
                    aria-expanded="false"
                    >
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <!-- Menu -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <!-- Surat -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                    <i class="fas fa-layer-group"></i>
                    <p>Kelola Surat</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a data-bs-toggle="collapse" href="#subnav1">
                                <p class="sub-item">
                                    <i class="fas fa-file-download"></i>
                                    <p>Surat Masuk</p>
                                </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="subnav1">
                                <ul class="nav nav-collapse subnav">
                                <li>
                                    <a href="#">
                                    <span class="sub-item">Tambah Surat Masuk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <span class="sub-item">List Surat Masuk</span>
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#subnav2">
                                <p class="sub-item">
                                    <i class="fas fa-file-upload"></i>
                                    <p>Surat Keluar</p>
                                </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="subnav2">
                                <ul class="nav nav-collapse subnav">
                                    <li>
                                        <a href="#">
                                        <span class="sub-item">Tambah Surat Keluar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="sub-item">List Surat Keluar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="collapse" href="#subnav3">
                                <p class="sub-item">
                                    <i class="fas fa-folder"></i>
                                    <p>Panduan Surat</p>
                                </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="subnav3">
                                <ul class="nav nav-collapse subnav">
                                    <li>
                                        <a href="#">
                                        <span class="sub-item">Tambah Panduan Surat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="sub-item">Panduan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    </div>
                </li>
                <!-- Arsip -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#arsipmenu">
                    <i class="fas fa-archive"></i>
                    <p>Kelola Arsip</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="arsipmenu">
                    <ul class="nav nav-collapse">
                        <li>
                        <a href="sidebar-style-2.html">
                            <p class="sub-item">
                                <i class="fas fa-file-signature"></i>
                                <p>Verifikasi Dokumen</p>
                            </p>
                        </a>
                        </li>
                        <li>
                        <a href="sidebar-style-2.html">
                            <p class="sub-item">
                                <i class="fas fa-folder-open"></i>
                                <p>Tambah Data Arsip</p>
                            </p>
                        </a>
                        </li>
                        <li>
                        <a href="icon-menu.html">
                            <p class="sub-item">
                                <i class="fas fa-th-list"></i>
                                <p>List Data Arsip</p>
                            </p>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <!-- Departement -->
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-address-card"></i>
                        <p>Kelola Departemen</p>
                    </a>
                </li>
                <!-- Request -->
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-signature"></i>
                        <p>Request Signature</p>
                        <span class="badge badge-secondary">1</span>
                    </a>
                </li>
                <!-- User -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#usermenu">
                    <i class="fas fa-user"></i>
                    <p>Kelola User</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="usermenu">
                    <ul class="nav nav-collapse">
                        <li>
                        <a href="sidebar-style-2.html">
                            <p class="sub-item">
                                <i class="fas fa-user-plus"></i>
                                <p>Tambah User Baru</p>
                            </p>
                        </a>
                        </li>
                        <li>
                        <a href="icon-menu.html">
                            <p class="sub-item">
                                <i class="fas fa-users"></i>
                                <p>List User</p>
                            </p>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
        <!-- Main Header -->
        <div class="main-header">
            <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                        <a class="me-3 text-primary" href="#" target="_blank" >
                            <i class="fas fa-book"></i>
                            &nbsp; Panduan Penggunaan Sistem
                        </a>
                    </nav>
                    <!-- Right Header -->
                    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <!-- Profile -->
                        <li class="nav-item topbar-user dropdown hidden-caret">
                        <a
                            class="dropdown-toggle profile-pic"
                            data-bs-toggle="dropdown"
                            href="#"
                            aria-expanded="false"
                        >
                            <div class="avatar-sm">
                                <img
                                    src="{{ asset('assets/img/admin.png') }}"
                                    alt="..."
                                    class="avatar-img rounded-circle"
                                />
                            </div>
                                <span class="profile-username">
                                <span class="op-7">Welcome,</span>
                                <span class="fw-bold">{{ Auth::user()->name }}</span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                <div class="avatar-lg">
                                    <img
                                    src="{{ asset('assets/img/admin.png') }}"
                                    alt="image profile"
                                    class="avatar-img rounded"
                                    />
                                </div>
                                <div class="u-text">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-muted">gm@kksp.id</p>
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-cog"></i>
                                    Account Setting
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>
                                </form>
                            </li>
                            </div>
                        </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Main Header -->
        <!-- Main Content -->
        <div class="container">
            <!-- Inner Content -->
            <div class="page-inner">
                <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
                >
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                </div>
                </div>
                <!-- Top Card -->
                <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col-icon">
                            <div
                            class="icon-big text-center icon-primary bubble-shadow-small"
                            >
                            <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                            <p class="card-category">Register User</p>
                            <h4 class="card-title">1,294</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col-icon">
                            <div
                            class="icon-big text-center icon-info bubble-shadow-small"
                            >
                            <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                            <p class="card-category">Manager</p>
                            <h4 class="card-title">1303</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col-icon">
                            <div
                            class="icon-big text-center icon-success bubble-shadow-small"
                            >
                            <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                            <p class="card-category">Admin</p>
                            <h4 class="card-title">1,345</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col-icon">
                            <div
                            class="icon-big text-center icon-secondary bubble-shadow-small"
                            >
                            <i class="far fa-user"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                            <p class="card-category">Arsip Staff</p>
                            <h4 class="card-title">576</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Surat & Arsip Chart -->
                <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <!-- Surat Chart -->
                        <div class="card-title">Stats Surat Masuk & Surat Keluar</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                        <canvas
                            id="pieChart"
                            style="width: 50%; height: 50%"
                        ></canvas>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Arsip Chart -->
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <div class="card-title">Stats Arsip</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                        <canvas
                            id="doughnutChart"
                            style="width: 50%; height: 50%"
                        ></canvas>
                        </div>
                    </div>
                    </div>
                </div>
                </div>            
            </div>
        </div>
        <!-- End Main Content -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <div class="copyright">
                Copyright &copy; KKSP 2024
                </div>
                <div class="col-md-6 text-md-end small">
                <a href="#!" class="text-dark">Privacy Policy</a>
                &middot;
                <a href="#!" class="text-dark">Terms &amp; Conditions</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

    <!-- Chart JS -->
    <script>
    var pieChart = document.getElementById("pieChart").getContext("2d"),
        doughnutChart = document
        .getElementById("doughnutChart")
        .getContext("2d");

    var myPieChart = new Chart(pieChart, {
        type: "pie",
        data: {
        datasets: [
            {
            data: [50, 35, 15],
            backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
            borderWidth: 0,
            },
        ],
        labels: ["New Visitors", "Subscribers", "Active Users"],
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: "bottom",
            labels: {
            fontColor: "rgb(154, 154, 154)",
            fontSize: 11,
            usePointStyle: true,
            padding: 20,
            },
        },
        pieceLabel: {
            render: "percentage",
            fontColor: "white",
            fontSize: 14,
        },
        tooltips: false,
        layout: {
            padding: {
            left: 20,
            right: 20,
            top: 20,
            bottom: 20,
            },
        },
        },
    });

    var myDoughnutChart = new Chart(doughnutChart, {
        type: "doughnut",
        data: {
        datasets: [
            {
            data: [10, 20, 30],
            backgroundColor: ["#f3545d", "#fdaf4b", "#1d7af3"],
            },
        ],

        labels: ["Red", "Yellow", "Blue"],
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: "bottom",
        },
        layout: {
            padding: {
            left: 20,
            right: 20,
            top: 20,
            bottom: 20,
            },
        },
        },
    });
    </script>
</body>
</html>
