<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="{{ route('dashboard') }}" class="logo">
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
                    <a href="">
                        <p class="sub-item">
                            <i class="fas fa-file-signature"></i>
                            <p>Verifikasi Dokumen</p>
                        </p>
                    </a>
                    </li>
                    <li>
                    <a href="{{ route('create-arsip') }}">
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
                    <a href="">
                        <p class="sub-item">
                            <i class="fas fa-user-plus"></i>
                            <p>Tambah User Baru</p>
                        </p>
                    </a>
                    </li>
                    <li>
                    <a href="#">
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
