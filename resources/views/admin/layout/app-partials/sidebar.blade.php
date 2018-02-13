<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="@yield('home-active')"><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="treeview @yield('data-active')">
                <a href="#"><i class="fa fa-database"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('prodi-active')"><a href="{{ route('admin.prodi.index') }}">Program Studi</a></li>
                    <li class="@yield('angkatan-active')"><a href="{{ route('admin.angkatan.index') }}">Angkatan</a></li>
                    <li class="@yield('dosen-active')"><a href="{{ route('admin.dosen.index') }}">Dosen</a></li>
                </ul>
            </li>
            <li class="@yield('wisudawan-active')"><a href="{{ route('admin.wisudawan.index') }}"><i class="fa fa-user"></i> <span>Wisudawan</span></a></li>
            <li class="header">PENGATURAN</li>
            <li class="@yield('setting-active')"><a href="{{ route('admin.setting.index') }}"><i class="fa fa-cog"></i> <span>Slide</span></a></li>
        </ul>
    </section>
</aside>