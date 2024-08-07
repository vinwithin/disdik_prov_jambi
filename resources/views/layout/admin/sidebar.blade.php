<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item ">
            <a href="/admin/dashboard" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li
            class="sidebar-item  has-sub  {{ Request::is('admin/profil*') || Request::is('admin/profil*') ? 'active' : '' }} ">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Profil</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/admin/profil" class="submenu-link">Kelola Profil</a>
                </li>
            </ul>
        </li>

        <li
            class="sidebar-item  has-sub  {{ Request::is('admin/berita*') || Request::is('admin/kegiatan*') ? 'active' : '' }} ">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Kelola Informasi</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/admin/berita" class="submenu-link">Berita</a>
                </li>
                <li class="submenu-item  ">
                    <a href="/admin/pengumuman" class="submenu-link">Pengumuman</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub {{ Request::is('admin/program*') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Program</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="/admin/program" class="submenu-link">Program</a>
                </li>
                
            </ul>
        </li>
        <li class="sidebar-item  has-sub {{ Request::is('admin/foto*') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Galeri</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="/admin/foto" class="submenu-link">Foto</a>

                </li>
                <li class="submenu-item  ">
                    <a href="/admin/video" class="submenu-link">Video</a>

                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub {{ Request::is('admin/prod-hukum*') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Produk Hukum</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="/admin/prod-hukum" class="submenu-link">Kelola Produk Hukum</a>
                </li>
                
            </ul>
        </li>
        <li class="sidebar-title"> Data Master</li>
        <li class="sidebar-title">
            <a href="/admin/logout">Logout</a>
        </li>
        {{-- <li class="sidebar-title">Extra UI</li> --}}
    </ul>
</div>
