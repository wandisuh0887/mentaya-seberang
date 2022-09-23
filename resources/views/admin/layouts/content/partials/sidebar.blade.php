<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIM DES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image" style="padding-left: 0rem;">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image" style="width: 3.5em">
            </div>
            <div class="info" style="margin-top: 10px">
                <a href="#" class="d-block">{{ Auth::user()->full_name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <hr>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ routeActive('dashboard') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ prefixBlock('kelurahan') }}">
                    <a href="#" class="nav-link {{ prefixActive('kelurahan') }}">
                        <i class="nav-icon fas fa-id-card-alt"></i>
                        <p>Kelurahan <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profilekel.index') }}" class="nav-link {{ routeActive('profilekel') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visi.index') }}" class="nav-link {{ routeActive('visi') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('struktur.index') }}" class="nav-link {{ routeActive('struktur') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Struktur Pemerintahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sarpras.index') }}" class="nav-link {{ routeActive('sarpras') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sarana Prasarana</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            &nbsp;
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('activity.index') }}" class="nav-link {{ routeActive('activity') }}">
                        <i class="nav-icon fab fa-creative-commons-share"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pemberdayaan.index') }}" class="nav-link {{ routeActive('pemberdayaan') }}">
                        <i class="nav-icon fab fa-superpowers"></i>
                        <p>Pemberdayaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}" class="nav-link {{ routeActive('service') }}">
                        <i class="nav-icon fas fa-asterisk"></i>
                        <p>Layanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelembagaan.index') }}" class="nav-link {{ routeActive('kelembagaan') }}">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>Kelembagaan</p>
                    </a>
                </li>
                <li class="nav-item {{ prefixBlock('setting') }}">
                    <a href="#" class="nav-link {{ prefixActive('setting') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pengaturan <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('banner.index') }}" class="nav-link {{ routeActive('banner') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile.index') }}" class="nav-link {{ routeActive('profile') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile Singkat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('upload.index') }}" class="nav-link {{ routeActive('upload') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upload File</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ prefixBlock('users') }}">
                    <a href="#" class="nav-link {{ prefixActive('users') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Administrator <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link {{ routeActive('user') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            &nbsp;
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
