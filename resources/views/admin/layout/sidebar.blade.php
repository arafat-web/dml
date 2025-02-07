<div class='sidebar' id='sidebar'>
    <div class='brand'>
        <h2>DML Admin</h2>
    </div>
    <div class='user-profile'>
        <div class='user-avatar'>A</div>
        <h3>DML</h3>
        <p>Administrator</p>
    </div>
    <ul class='nav-menu'>
        <a href="{{ route('admin.dashboard') }}">
            <li class='nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}'>
                <i class='fas fa-home'></i>Dashboard
            </li>
        </a>
        <a href="{{ route('admin.services.index') }}">
            <li
                class='nav-item {{ request()->routeIs('admin.services.index') || request()->routeIs('admin.services.create') ? 'active' : '' }}'>
                <i class='fas fa-truck'></i>Services
            </li>
        </a>
        <a href="{{ route('admin.seo.index') }}">
            <li
                class='nav-item {{ request()->routeIs('admin.seo.index') || request()->routeIs('admin.seo.create') ? 'active' : '' }}'>
                <i class='fas fa-info-circle'></i>S.E.O
            </li>
        </a>
        <a href="analytics.html">
            <li class='nav-item'>
                <i class='fas fa-info-circle'></i>About Us
            </li>
        </a>
        <a href="{{ route('admin.contact-info.index') }}">
            <li class='nav-item {{ request()->routeIs('admin.contact-info.index') ? 'active' : '' }}'>
                <i class='fas fa-address-book'></i> Contact & Social
            </li>
        </a>
        <a href="contact-social-media.html">
            <li class='nav-item'>
                <i class='fas fa-chart-bar'></i> Statistics
            </li>
        </a>
        <a href="settings.html">
            <li class='nav-item'>
                <i class='fas fa-cog'></i>Settings
            </li>
        </a>
        <a href="{{ route('admin.logout') }}">
            <li class='nav-item'>
                <i class='fas fa-sign-out-alt'></i>Logout
            </li>
        </a>
    </ul>
</div>
