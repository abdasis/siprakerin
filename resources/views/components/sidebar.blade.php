<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                @if(Auth::user()->roles == 'admin')
                    <ul class="nk-menu">
                        <li class="nk-menu-item">
                            <a href="{{url('dashboard')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Apps</h6>
                        </li><!-- .nk-menu-heading -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                <span class="nk-menu-text">Data Admin</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{route('admin.tambah')}}" class="nk-menu-link"><span class="nk-menu-text">Tambah Admin</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('admin.semua')}}" class="nk-menu-link"><span class="nk-menu-text">Semua Admin</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                <span class="nk-menu-text">Data Siswa</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{route('siswa.tambah')}}" class="nk-menu-link"><span class="nk-menu-text">Tambah Siswa</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('siswa.semua')}}" class="nk-menu-link"><span class="nk-menu-text">Semua Siswa</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                                <span class="nk-menu-text">Data Dudi</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{route('dudi.tambah')}}" class="nk-menu-link"><span class="nk-menu-text">Tambah Dudi</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('dudi.semua')}}" class="nk-menu-link"><span class="nk-menu-text">Semua Dudi</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item">
                            <a href="{{route('pilih-penempatan')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-location"></em></span>
                                <span class="nk-menu-text">Penempatan</span>
                            </a>
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item">
                            <a href="{{route('jurusan.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-navigate"></em></span>
                                <span class="nk-menu-text">Jurusan</span>
                            </a>
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item">
                            <a href="{{route('absensi.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-calender-date"></em></span>
                                <span class="nk-menu-text">Absensi</span>
                            </a>
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item">
                            <a href="{{route('nilai.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-book"></em></span>
                                <span class="nk-menu-text">Nilai</span>
                            </a>
                        </li><!-- .nk-menu-item -->





                    </ul><!-- .nk-menu -->
                @elseif(Auth::user()->roles == 'dudi')
                    <ul class="nk-menu">
                        <li class="nk-menu-item">
                            <a href="{{url('dashboard')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Apps</h6>
                        </li><!-- .nk-menu-heading -->

                        <li class="nk-menu-item">
                            <a href="{{route('absensi.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-navigate"></em></span>
                                <span class="nk-menu-text">Absensi</span>
                            </a>
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item">
                            <a href="{{route('nilai.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-book"></em></span>
                                <span class="nk-menu-text">Nilai</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    </ul><!-- .nk-menu -->
                @elseif(Auth::user()->roles == 'siswa')
                    <ul class="nk-menu">
                        <li class="nk-menu-item">
                            <a href="{{url('dashboard')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Apps</h6>
                        </li><!-- .nk-menu-heading -->
                        <li class="nk-menu-item">
                            <a href="{{route('absensi.semua')}}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-navigate"></em></span>
                                <span class="nk-menu-text">Absensi</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    </ul><!-- .nk-menu -->
                @endif
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
