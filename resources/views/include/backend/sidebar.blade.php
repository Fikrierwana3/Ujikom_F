    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{route('auth.home')}}" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('backend/assets/images/logo-full.png') }}" alt="" class="logo logo-lg" width="140px"/>
                    <img src="{{ asset('backend/assets/images/logo-abbr.png') }}" alt="" class="logo logo-sm" width="160px"/>
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{route('auth.home')}}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{route('kategori.index')}}" class="nxl-link">
                            <span class="nxl-micon"><i class="bi bi-bookmarks"></i></i></span>
                            <span class="nxl-mtext">Kategori</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{route('berita.index')}}" class="nxl-link">
                            <span class="nxl-micon"><i class="bi bi-newspaper"></i></i></span>
                            <span class="nxl-mtext">List Berita</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{route('users.index')}}" class="nxl-link">
                            <span class="nxl-micon"><i class="bi bi-person-check"></i></i></span>
                            <span class="nxl-mtext">List User</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                </ul>
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Detail Acount</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="/profile" class="nxl-link">
                            <span class="nxl-micon"><i class="bi bi-person-bounding-box"></i></i></span>
                            <span class="nxl-mtext">My Profile</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
