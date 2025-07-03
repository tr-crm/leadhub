<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="index" class="logo">
        <span class="logo logo-light">
            <span class="logo-lg"><img src="/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo logo-dark">
            <span class="logo-lg"><img src="/images/logo-black.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-on-hover">
        <i class="ti ti-menu-4 fs-22 align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-offcanvas">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div class="scrollbar" data-simplebar>

        <!-- User -->
        <div class="sidenav-user">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="pages-profile" class="link-reset">
                        <img src="/images/users/user-2.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md">
                        <span class="sidenav-user-name fw-bold">Damian D.</span>
                        <span class="fs-12 fw-semibold">Art Director</span>
                    </a>
                </div>
                <div>
                    <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                    </a>

                    <div class="dropdown-menu">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back!</h6>
                        </div>

                        <!-- My Profile -->
                        <a href="pages-profile" class="dropdown-item">
                            <i class="ti ti-user-circle me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>

                        <!-- Notifications -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-bell-ringing me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Notifications</span>
                        </a>

                        <!-- Wallet -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-credit-card me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Balance: <span class="fw-semibold">$985.25</span></span>
                        </a>

                        <!-- Settings -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-settings-2 me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <!-- Support -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-headset me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Support Center</span>
                        </a>

                        <!-- Divider -->
                        <div class="dropdown-divider"></div>

                        <!-- Lock -->
                        <a href="auth-lock-screen" class="dropdown-item">
                            <i class="ti ti-lock me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>

                        <!-- Logout -->
                        <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                            <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Menu</li>

            <li class="side-nav-item">
                <a href="index" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
                    <span class="menu-text">Starter Page</span>
                    <span class="badge text-bg-danger">01</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="landing" target="_blank" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-stack-front"></i></span>
                    <span class="menu-text">Landing Page</span>
                </a>
            </li>


            <li class="side-nav-title mt-2">Custom Pages</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-lock"></i></span>
                    <span class="menu-text"> Authentication </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarOneAuth" aria-expanded="false" aria-controls="sidebarOneAuth" class="side-nav-link">
                                <span class="menu-text"> Version 1 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarOneAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="auth-sign-in" class="side-nav-link">
                                            <span class="menu-text">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-sign-up" class="side-nav-link">
                                            <span class="menu-text">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-reset-pass" class="side-nav-link">
                                            <span class="menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-new-pass" class="side-nav-link">
                                            <span class="menu-text">New Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-two-factor" class="side-nav-link">
                                            <span class="menu-text">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-lock-screen" class="side-nav-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-success-mail" class="side-nav-link">
                                            <span class="menu-text">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-login-pin" class="side-nav-link">
                                            <span class="menu-text">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-delete-account" class="side-nav-link">
                                            <span class="menu-text">Delete Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTwoAuth" aria-expanded="false" aria-controls="sidebarTwoAuth" class="side-nav-link">
                                <span class="menu-text"> Version 2 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTwoAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="auth-2-sign-in" class="side-nav-link">
                                            <span class="menu-text">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-sign-up" class="side-nav-link">
                                            <span class="menu-text">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-reset-pass" class="side-nav-link">
                                            <span class="menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-new-pass" class="side-nav-link">
                                            <span class="menu-text">New Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-two-factor" class="side-nav-link">
                                            <span class="menu-text">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-lock-screen" class="side-nav-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-success-mail" class="side-nav-link">
                                            <span class="menu-text">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-login-pin" class="side-nav-link">
                                            <span class="menu-text">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-2-delete-account" class="side-nav-link">
                                            <span class="menu-text">Delete Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThreeAuth" aria-expanded="false" aria-controls="sidebarThreeAuth" class="side-nav-link">
                                <span class="menu-text"> Version 3 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThreeAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="auth-3-sign-in" class="side-nav-link">
                                            <span class="menu-text">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-sign-up" class="side-nav-link">
                                            <span class="menu-text">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-reset-pass" class="side-nav-link">
                                            <span class="menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-new-pass" class="side-nav-link">
                                            <span class="menu-text">New Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-two-factor" class="side-nav-link">
                                            <span class="menu-text">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-lock-screen" class="side-nav-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-success-mail" class="side-nav-link">
                                            <span class="menu-text">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-login-pin" class="side-nav-link">
                                            <span class="menu-text">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-3-delete-account" class="side-nav-link">
                                            <span class="menu-text">Delete Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-alert-hexagon"></i></span>
                    <span class="menu-text"> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesError">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="error-400" class="side-nav-link">
                                <span class="menu-text">400</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-401" class="side-nav-link">
                                <span class="menu-text">401</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-403" class="side-nav-link">
                                <span class="menu-text">403</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-404" class="side-nav-link">
                                <span class="menu-text">404</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-408" class="side-nav-link">
                                <span class="menu-text">408</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-500" class="side-nav-link">
                                <span class="menu-text">500</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="maintenance" class="side-nav-link">
                                <span class="menu-text">Maintenance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2">Layouts</li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout"></i></span>
                    <span class="menu-text"> Layout Options </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="layouts-scrollable" target="_blank" class="side-nav-link">
                                <span class="menu-text">Scrollable</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-compact" target="_blank" class="side-nav-link">
                                <span class="menu-text">Compact</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-boxed" target="_blank" class="side-nav-link">
                                <span class="menu-text">Boxed</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-horizontal" target="_blank" class="side-nav-link">
                                <span class="menu-text">Horizontal</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-outlook" target="_blank" class="side-nav-link">
                                <span class="menu-text">Outlook</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-preloader" target="_blank" class="side-nav-link">
                                <span class="menu-text">Preloader</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#themeSkin" aria-expanded="false" aria-controls="themeSkin" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout"></i></span>
                    <span class="menu-text"> Skin Options </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="themeSkin">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="skin-classic" target="_blank" class="side-nav-link">
                                <span class="menu-text">Classic (Default)</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="skin-saas" target="_blank" class="side-nav-link">
                                <span class="menu-text">SaaS</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="skin-material" target="_blank" class="side-nav-link">
                                <span class="menu-text">Material</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="skin-modern" target="_blank" class="side-nav-link">
                                <span class="menu-text">Modern</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="skin-minimal" target="_blank" class="side-nav-link">
                                <span class="menu-text">Minimal</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="skin-flat" target="_blank" class="side-nav-link">
                                <span class="menu-text">Flat</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSidebars" aria-expanded="false" aria-controls="sidebarSidebars" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-sidebar"></i></span>
                    <span class="menu-text"> Sidebars </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSidebars">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="sidebar-light" target="_blank" class="side-nav-link">
                                <span class="menu-text">Light Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-gradient" target="_blank" class="side-nav-link">
                                <span class="menu-text">Gradient Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-gray" target="_blank" class="side-nav-link">
                                <span class="menu-text">Gray Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-image" target="_blank" class="side-nav-link">
                                <span class="menu-text">Image Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-compact" target="_blank" class="side-nav-link">
                                <span class="menu-text">Compact Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-icon-view" target="_blank" class="side-nav-link">
                                <span class="menu-text">Icon View Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-on-hover" target="_blank" class="side-nav-link">
                                <span class="menu-text">On Hover Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-on-hover-active" target="_blank" class="side-nav-link">
                                <span class="menu-text">On Hover Active</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-offcanvas" target="_blank" class="side-nav-link">
                                <span class="menu-text">Offcanvas Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-no-icons" target="_blank" class="side-nav-link">
                                <span class="menu-text">No Icons with Lines</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="sidebar-with-lines" target="_blank" class="side-nav-link">
                                <span class="menu-text">Sidebar with Lines</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTopbars" aria-expanded="false" aria-controls="sidebarTopbars" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-bottombar"></i></span>
                    <span class="menu-text"> Topbar </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTopbars">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="topbar-dark" target="_blank" class="side-nav-link">
                                <span class="menu-text">Dark Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="topbar-gray" target="_blank" class="side-nav-link">
                                <span class="menu-text">Gray Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="topbar-gradient" target="_blank" class="side-nav-link">
                                <span class="menu-text">Gradient Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="topbar-sub-items" class="side-nav-link">
                                <span class="menu-text">Topbar with Sub Items</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="topbar-tools" class="side-nav-link">
                                <span class="menu-text">Topbar with Tools</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="side-nav-title mt-2">Menu Items</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMenuLevels" aria-expanded="false" aria-controls="sidebarMenuLevels" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-sitemap"></i></span>
                    <span class="menu-text"> Menu Levels </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMenuLevels">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel" class="side-nav-link">
                                <span class="menu-text"> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            <span class="menu-text">Item 2.1</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            <span class="menu-text">Item 2.2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel" class="side-nav-link">
                                <span class="menu-text"> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel" class="side-nav-link">
                                            <span class="menu-text"> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="sub-menu">
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 3.1</span>
                                                    </a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 3.2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="#!" class="side-nav-link disabled">
                                <span class="menu-text">Disabled Item</span>
                                <span class="badge text-bg-light opacity-50">soon</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link disabled">
                    <span class="menu-icon"><i class="ti ti-ban"></i></span>
                    <span class="menu-text"> Disabled Menu </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link special-menu">
                    <span class="menu-icon"><i class="ti ti-star"></i></span>
                    <span class="menu-text"> Special Menu </span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- Sidenav Menu End -->