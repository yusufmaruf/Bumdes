<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/branding/logo.png') }}" alt="" width="32px" height="22px"
                    srcset="">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">SPMS</span>
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
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>
        <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-paper-bag"></i>
                <div data-i18n="Produk">Produk</div>
            </a>
        </li>

        <li class="menu-item  {{ request()->is('stok*') ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-fridge"></i>
                <div data-i18n="Stok Bahan Baku">Stok Bahan Baku</div>
            </a>
        </li>
    </ul>
</aside>
