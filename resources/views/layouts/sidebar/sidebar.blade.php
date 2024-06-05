<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/branding/logo.png') }}" alt="" width="32px" height="22px"
                    srcset="">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">BUMDES</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item  {{ request()->is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboard</div>
            </a>
        </li>

        @if (Auth::user()->role == 'admin')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Pengguna</span>
            </li>
            <li class="menu-item {{ request()->is('admin/penggun*') ? 'active' : '' }}">
                <a href="{{ route('admin.pengguna.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div data-i18n="User">Pengguna</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Unit Usaha</span>
            </li>
            <li class="menu-item {{ request()->is('admin/bumdes*') ? 'active' : '' }}">
                <a href="{{ route('admin.bumdes.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-building-store"></i>
                    <div data-i18n="Unit Usaha">Unit Usaha</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/categoryUnitUsaha*') ? 'active' : '' }}">
                <a href="{{ route('admin.categoryUnitUsaha.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-category"></i>
                    <div data-i18n="Jenis Unit Usaha">Jenis Unit Usaha</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Transaksi</span>
            </li>
            <li class="menu-item {{ request()->is('admin/reportAdmin*') ? 'active' : '' }}">
                <a href="{{ route('admin.reportAdmin.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-cash"></i>
                    <div data-i18n="Semua Transaksi">Semua Transaksi</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/reportsalesadmin*') ? 'active' : '' }}">
                <a href="{{ route('admin.reportsalesadmin.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-shopping-cart-plus"></i>
                    <div data-i18n="Transaksi Masuk"> Transaksi Masuk</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/reportpurchaseadmin*') ? 'active' : '' }}">
                <a href="{{ route('admin.reportpurchaseadmin.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-shopping-cart-minus"></i>
                    <div data-i18n="Transaksi Keluar"> Transaksi Keluar</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Kegiatan</span>
            </li>
            <li class="menu-item {{ request()->is('admin/agenda*') ? 'active' : '' }}">
                <a href="{{ route('admin.agenda.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-calendar"></i>
                    <div data-i18n="Agenda"> Agenda</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/categoryPost*') ? 'active' : '' }}">
                <a href="{{ route('admin.categoryPost.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-category"></i>
                    <div data-i18n="Kategori Berita"> Kategori Berita</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('admin/berita*') ? 'active' : '' }}">
                <a href="{{ route('admin.berita.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-news"></i>
                    <div data-i18n="Berita"> Berita</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Website</span>
            </li>
            <li class="menu-item {{ request()->is('admin/visimisi*') ? 'active' : '' }}">
                <a href="{{ route('admin.visimisi.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Visi, Misi, Regulasi"> Visi, Misi, Regulasi</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/banner*') ? 'active' : '' }}">
                <a href="{{ route('admin.banner.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Banner">Banner</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/struktural*') ? 'active' : '' }}">
                <a href="{{ route('admin.struktural.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Struktural, Logo">Struktural, Logo</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/sosialmedia*') ? 'active' : '' }}">
                <a href="{{ route('admin.sosialmedia.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Sosial Media">Social Media</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/pengguna/*/edit') ? 'active' : '' }}">
                <a href="{{ route('admin.pengguna.edit', Auth::user()->id) }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Profile">Profile</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/gallery*') ? 'active' : '' }}">
                <a href="{{ route('admin.gallery.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Gallery">Gallery</div>
                </a>
            </li>
        @else
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Unit Usaha</span>
            </li>
            <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-building-store"></i>
                    <div data-i18n="Unit Usaha">Unit Usaha</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Transaksi</span>
            </li>
            <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-cash"></i>
                    <div data-i18n="Semua Transaksi">Semua Transaksi</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-shopping-cart-plus"></i>
                    <div data-i18n="Transaksi Masuk"> Transaksi Masuk</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-shopping-cart-minus"></i>
                    <div data-i18n="Transaksi Keluar"> Transaksi Keluar</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Master Setting</span>
            </li>
            <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div data-i18n="Profil Pengguna"> Profil Pengguna</div>
                </a>
            </li>
        @endif


    </ul>
</aside>
