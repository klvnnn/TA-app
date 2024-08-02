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
                            <p class="text-muted">{{ Auth::user()->email }}</p>
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