<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{ asset('admin/images/logo.png') }}" alt="logo" alt="">
        </div>
        <span class="logo_name">Admin Panel</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a class="active" href="{{ route('admin.dashboard') }}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a>
            </li>
        </ul>

        <ul class="logout-mode">
            <li>
                <a href="{{ route('admin.logout') }}">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>
