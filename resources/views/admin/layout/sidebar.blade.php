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
        <li class='nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}'>
            <a href="{{ route('admin.dashboard') }}">
                <i class='fas fa-home'></i>Dashboard
            </a>
        </li>
        <li class='nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}'>
            <a href="{{ route('admin.services.index') }}">
                <i class='fas fa-truck'></i>Services
            </a>
        </li>
        <li class='nav-item'>
            <a href="analytics.html">
                <i class='fas fa-info-circle'></i>About Us
            </a>
        </li>
        <li class='nav-item'>
            <a href="contact-social-media.html">
                <i class='fas fa-address-book'></i> Contact & Social
            </a>
        </li>
        <li class='nav-item'>
            <a href="contact-social-media.html">
                <i class='fas fa-chart-bar'></i> Statistics
            </a>
        </li>
        <li class='nav-item'>
            <a href="settings.html">
                <i class='fas fa-cog'></i>Settings
            </a>
        </li>
        <li class='nav-item'>
            <a href="{{ route('admin.logout') }}">
                <i class='fas fa-sign-out-alt'></i>Logout
            </a>
        </li>
    </ul>
</div>
