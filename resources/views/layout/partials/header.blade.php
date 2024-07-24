<!-- Header -->
<header class="header fixed">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('index') }}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{ url('index') }}" class="navbar-brand logo-small">
                    <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('index') }}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav navbar-nav">
                    <li class="nav-item"><a href="{{ url('index') }}"
                            class="nav-link {{ Request::is('index', '/') ? 'active' : '' }}">Home</a></li>
                   
                    <li class="has-submenu">
                        <a href="javascript:void(0);"
                            class="{{ Request::is('service', 'service-grid-sidebar', 'service-details', 'categories', 'categories-2', 'service-sub-category', 'add-gigs') ? 'active' : '' }}">Gigs
                            <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a class="{{ Request::is('service') ? 'active' : '' }}"
                                    href="{{ url('service') }}">Gigs Grid</a></li>
                            <li><a class="{{ Request::is('service-grid-sidebar') ? 'active' : '' }}"
                                    href="{{ url('service-grid-sidebar') }}">Gig Left Sidebar</a></li>
                            <li><a class="{{ Request::is('service-details') ? 'active' : '' }}"
                                    href="{{ url('service-details') }}">Gig Details</a></li>
                            <li><a class="{{ Request::is('categories') ? 'active' : '' }}"
                                    href="{{ url('categories') }}">Gig Category</a></li>
                            <li><a class="{{ Request::is('categories-2') ? 'active' : '' }}"
                                    href="{{ url('categories-2') }}">Gig Category 2</a></li>
                            <li><a class="{{ Request::is('service-sub-category') ? 'active' : '' }}"
                                    href="{{ url('service-sub-category') }}">Gig Subcategory</a></li>
                            <li><a class="{{ Request::is('add-gigs') ? 'active' : '' }}"
                                    href="{{ url('add-gigs') }}">Create a Gig</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href=""
                            class="{{ Request::is('about-us', 'team', 'team-carousel', 'team-details', 'signin', 'signup', 'forgot-password', 'lock-screen', 'error-404', 'error-500', 'portfolio', 'pricing', 'under-construction', 'coming-soon','faq','portfolio-details') ? 'active' : '' }}">Pages
                            <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ url('about-us') }}"
                                    class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);"
                                    class="{{ Request::is('team', 'team-carousel', 'team-details') ? 'active' : '' }}">Our
                                    Team</a>
                                <ul class="submenu">
                                    <li><a class="{{ Request::is('team') ? 'active' : '' }}"
                                            href="{{ url('team') }}">Team Grid</a></li>
                                    <li><a class="{{ Request::is('team-carousel') ? 'active' : '' }}"
                                            href="{{ url('team-carousel') }}">Team Carousel</a></li>
                                    <li><a class="{{ Request::is('team-details') ? 'active' : '' }}"
                                            href="{{ url('team-details') }}">Team Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);"
                                    class="{{ Request::is('signin', 'signup', 'forgot-password', 'lock-screen') ? 'active' : '' }}">Authentication</a>
                                <ul class="submenu">
                                    <li><a class="{{ Request::is('signin') ? 'active' : '' }}"
                                            href="{{ url('signin') }}">Login</a></li>
                                    <li><a class="{{ Request::is('signup') ? 'active' : '' }}"
                                            href="{{ url('signup') }}">Register</a></li>
                                    <li><a class="{{ Request::is('forgot-password') ? 'active' : '' }}"
                                            href="{{ url('forgot-password') }}">Forgot Password</a></li>
                                    <li><a class="{{ Request::is('lock-screen') ? 'active' : '' }}"
                                            href="{{ url('lock-screen') }}">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);"
                                    class="{{ Request::is('error-404', 'error-500') ? 'active' : '' }}">Error
                                    pages</a>
                                <ul class="submenu">
                                    <li><a class="{{ Request::is('error-404') ? 'active' : '' }}"
                                            href="{{ url('error-404') }}">Error 404</a></li>
                                    <li><a class="{{ Request::is('error-500') ? 'active' : '' }}"
                                            href="{{ url('error-500') }}">Error 500</a></li>
                                </ul>
                            </li>
                            <li><a class="{{ Request::is('portfolio','portfolio-details') ? 'active' : '' }}"
                                    href="{{ url('portfolio') }}">Portfolio</a></li>
                            <li><a class="{{ Request::is('pricing','faq') ? 'active' : '' }}"
                                    href="{{ url('pricing') }}">Pricing</a></li>
                            <li><a class="{{ Request::is('under-construction') ? 'active' : '' }}"
                                    href="{{ url('under-construction') }}">Maintenance</a></li>
                            <li><a class="{{ Request::is('coming-soon') ? 'active' : '' }}"
                                    href="{{ url('coming-soon') }}">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);"
                            class="{{ Request::is('blog', 'blog-2-grid', 'blog-list', 'blog-carousel', 'blog-mansory', 'blog-right-sidebar', 'blog-sidebar', 'blog-details', 'blog-details-sidebar', 'blog-details-right-sidebar') ? 'active' : '' }}">Blog
                            <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a class="{{ Request::is('blog') ? 'active' : '' }}"
                                    href="{{ url('blog') }}">Blog 3 Grid</a></li>
                            <li><a class="{{ Request::is('blog-2-grid') ? 'active' : '' }}"
                                    href="{{ url('blog-2-grid') }}">Blog 2 Grid</a></li>
                            <li><a class="{{ Request::is('blog-list') ? 'active' : '' }}"
                                    href="{{ url('blog-list') }}">Blog List</a></li>
                            <li><a class="{{ Request::is('blog-carousel') ? 'active' : '' }}"
                                    href="{{ url('blog-carousel') }}">Blog Carousal</a></li>
                            <li><a class="{{ Request::is('blog-mansory') ? 'active' : '' }}"
                                    href="{{ url('blog-mansory') }}">Blog Mansory</a></li>
                            <li><a class="{{ Request::is('blog-sidebar') ? 'active' : '' }}"
                                    href="{{ url('blog-sidebar') }}">Blog Left Sidebar</a></li>
                            <li><a class="{{ Request::is('blog-right-sidebar') ? 'active' : '' }}"
                                    href="{{ url('blog-right-sidebar') }}">Blog Right Sidebar</a></li>
                            <li><a class="{{ Request::is('blog-details') ? 'active' : '' }}"
                                    href="{{ url('blog-details') }}">Blog Details</a></li>
                            <li><a class="{{ Request::is('blog-details-sidebar') ? 'active' : '' }}"
                                    href="{{ url('blog-details-sidebar') }}">Blog Details Left Sidebar</a></li>
                            <li><a class="{{ Request::is('blog-details-right-sidebar') ? 'active' : '' }}"
                                    href="{{ url('blog-details-right-sidebar') }}">Blog Details Right Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);"
                            class="{{ Request::is('user-dashboard', 'user-profile', 'user-gigs', 'user-purchase', 'user-sales', 'user-files', 'user-reviews', 'user-wishlist', 'user-message', 'user-wallet', 'user-payments', 'user-settings', 'edit-gigs','integration-settings','notification-settings','preference-settings','security-settings','billing-settings') ? 'active' : '' }}">User
                            Dashboard <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a class="{{ Request::is('user-dashboard') ? 'active' : '' }}"
                                    href="{{ url('user-dashboard') }}">Dashboard</a></li>
                            <li><a class="{{ Request::is('user-profile') ? 'active' : '' }}"
                                    href="{{ url('user-profile') }}">My Profile</a></li>
                            <li><a class="{{ Request::is('user-gigs', 'edit-gigs') ? 'active' : '' }}"
                                    href="{{ url('user-gigs') }}">Manage Gigs</a></li>
                            <li><a class="{{ Request::is('user-purchase') ? 'active' : '' }}"
                                    href="{{ url('user-purchase') }}">Purchase</a></li>
                            <li><a class="{{ Request::is('user-sales') ? 'active' : '' }}"
                                    href="{{ url('user-sales') }}">Sales</a></li>
                            <li><a class="{{ Request::is('user-files') ? 'active' : '' }}"
                                    href="{{ url('user-files') }}">Files</a></li>
                            <li><a class="{{ Request::is('user-reviews') ? 'active' : '' }}"
                                    href="{{ url('user-reviews') }}">My Reviews</a></li>
                            <li><a class="{{ Request::is('user-wishlist') ? 'active' : '' }}"
                                    href="{{ url('user-wishlist') }}">Wishlist</a></li>
                            <li><a class="{{ Request::is('user-message') ? 'active' : '' }}"
                                    href="{{ url('user-message') }}">Messages</a></li>
                            <li><a class="{{ Request::is('user-wallet') ? 'active' : '' }}"
                                    href="{{ url('user-wallet') }}">Wallet</a></li>
                            <li><a class="{{ Request::is('user-payments') ? 'active' : '' }}"
                                    href="{{ url('user-payments') }}">Payments</a></li>
                            <li><a class="{{ Request::is('user-settings','integration-settings','preference-settings','notification-settings','security-settings') ? 'active' : '' }}"
                                    href="{{ url('user-settings') }}">Settings</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0);"
                            class="{{ Request::is('contact-us', 'contact-us-v2', 'contact-us-v3') ? 'active' : '' }}">Contact
                            <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a class="{{ Request::is('contact-us') ? 'active' : '' }}"
                                    href="{{ url('contact-us') }}">Contact V1</a></li>
                            <li><a class="{{ Request::is('contact-us-v2') ? 'active' : '' }}"
                                    href="{{ url('contact-us-v2') }}">Contact V2</a></li>
                            <li><a class="{{ Request::is('contact-us-v3') ? 'active' : '' }}"
                                    href="{{ url('contact-us-v3') }}">Contact V3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item responsive-link"><a href="{{ url('signin') }}" class="nav-link">Sign In</a>
                    </li>
                    <li class="nav-item responsive-link"><a href="{{ url('signup') }}" class="nav-link">Get
                            Started</a></li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                @if (!Route::is(['add-gigs', 'billing-settings', 'edit-gigs','user-profile','integration-settings','notification-settings','billing-settings','preference-settings','security-settings','user-settings','user-dashboard','user-files','user-gigs','user-message','user-notification','user-payments','user-purchase','user-reviews','user-sales','user-wallet','user-wishlist']))
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="{{ url('signin') }}">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('signup') }}">Get Started</a>
                    </li>
                @endif
                @if (Route::is(['add-gigs', 'billing-settings', 'edit-gigs','user-profile','integration-settings','notification-settings','billing-settings','preference-settings','security-settings','user-settings','user-dashboard','user-files','user-gigs','user-message','user-notification','user-payments','user-purchase','user-reviews','user-sales','user-wallet','user-wishlist']))
                    <!-- Notifications -->
                    <li class="nav-item logged-item noti-nav noti-wrapper">
                        <a href="{{ url('user-notification') }}" class="nav-link">
                            <span class="bell-icon"><img src="{{ URL::asset('/assets/img/icons/bell-icon.svg') }}"
                                    alt="Bell"></span>
                            <span class="badge badge-pill"></span>
                        </a>
                    </li>
                    <!-- /Notifications -->

                    <!-- User Menu -->
                    <li class="nav-item dropdowns has-arrow logged-item">
                        <a href="#" class="nav-link toggle">
                            <span class="log-user dropdown-toggle">
                                <span class="users-img">
                                    <img class="rounded-circle"
                                        src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="Profile">
                                </span>
                                <span class="user-text">Harry Brooks</span>
                            </span>
                        </a>
                        <div class="dropdown-menu list-group">
                            <div class="user-item">
                                <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" alt="Profile">
                                <div class="user-name">
                                    <h6>Harry Brooks</h6>
                                    <p>Joined On : 14 Jan 2024</p>
                                </div>
                            </div>
                            <div class="search-filter-selected select-icon">
                                <div class="form-group">
                                    <span class="sort-text"><img
                                            src="{{ URL::asset('/assets/img/icons/user-cog.svg') }}"
                                            class="img-fluid" alt="img"></span>
                                    <select class="select">
                                        <option>Seller</option>
                                        <option>Purchase</option>
                                    </select>
                                </div>
                            </div>
                            <a class="dropdown-item drop-line" href="{{ url('user-dashboard') }}">
                                <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-01.svg') }}"
                                    class="img-fluid" alt="img">Dashboard
                            </a>
                            <a class="dropdown-item" href="{{ url('user-purchase') }}">
                                <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-03.svg') }}"
                                    class="img-fluid" alt="img">My Purchase
                            </a>
                            <a class="dropdown-item" href="{{ url('user-sales') }}">
                                <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-04.svg') }}"
                                    class="img-fluid" alt="img">My Sales
                            </a>
                            <a class="dropdown-item" href="{{ url('user-wallet') }}">
                                <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-09.svg') }}"
                                    class="img-fluid" alt="img">My Wallet
                            </a>
                            <hr>
                            <a class="dropdown-item" href="{{ url('user-settings') }}">
                                <img src="{{ URL::asset('/assets/img/icons/settings-cog.svg') }}" class="img-fluid"
                                    alt="img">Settings
                            </a>
                            <a class="dropdown-item" href="{{ url('user-profile') }}">
                                <img src="{{ URL::asset('/assets/img/icons/user-cog.svg') }}" class="img-fluid"
                                    alt="img">My Profile
                            </a>
                            <hr>
                            <a class="dropdown-item log-out" href="{{ url('index') }}">
                                <img src="{{ URL::asset('/assets/img/icons/logout.svg') }}" class="img-fluid"
                                    alt="img">Logout
                            </a>
                        </div>
                    </li>
                    <!-- /User Menu -->
                @endif
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
