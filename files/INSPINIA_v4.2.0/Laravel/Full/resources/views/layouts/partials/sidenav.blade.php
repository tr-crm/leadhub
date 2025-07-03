<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="/" class="logo">
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
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="link-reset">
                        <img src="/images/users/user-2.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md">
                        <span class="sidenav-user-name fw-bold">Damian D.</span>
                        <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
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
                        <a href="{{ route('second', ['pages', 'profile'])}}" class="dropdown-item">
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
                        <a href="{{ route('second', ['auth1', 'lock-screen'])}}" class="dropdown-item">
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
            <li class="side-nav-title" data-lang="menu-title">Menu</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
                    <span class="menu-text" data-lang="dashboards">Dashboards</span>
                    <span class="badge bg-success">5</span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['dashboards', 'index']) }}" class="side-nav-link">
                                <span class="menu-text" data-lang="dashboard-one">Dashboard v.1</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['dashboards', 'index-2']) }}" class="side-nav-link">
                                <span class="menu-text" data-lang="dashboard-two">Dashboard v.2</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['dashboards', 'index-3']) }}" class="side-nav-link">
                                <span class="menu-text" data-lang="dashboard-three">Dashboard v.3</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#!" class="side-nav-link disabled">
                                <span class="menu-text" data-lang="dashboard-four">Dashboard v.4</span>
                                <span class="badge text-bg-light opacity-50" data-lang="dashboard-soon">soon</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="#!" class="side-nav-link disabled">
                                <span class="menu-text" data-lang="dashboard-five">Dashboard v.5</span>
                                <span class="badge text-bg-light opacity-50" data-lang="dashboard-soon">soon</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('any', ['landing'])}}" target="_blank" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-stack-front"></i></span>
                    <span class="menu-text" data-lang="landing-page">Landing Page</span>
                </a>
            </li>

            <li class="side-nav-title" data-lang="apps-title">Apps</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-basket"></i></span>
                    <span class="menu-text" data-lang="ecommerce">Ecommerce</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="false" aria-controls="sidebarProducts" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-products">Products</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProducts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'products'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-list">Products</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'product-grid'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-grid">Products Grid</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-details">Product Details</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'add-product'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-add">Add Product</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'ecommerce', 'categories'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-categories">Categories</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarOrders" aria-expanded="false" aria-controls="sidebarOrders" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-orders">Orders</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarOrders">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'orders'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-orders-list">Orders</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'order-details'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-order-details">Order Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'ecommerce', 'customers'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-customers">Customers</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSellers" aria-expanded="false" aria-controls="sidebarSellers" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-sellers"> Sellers </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSellers">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'sellers'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-sellers-list">Sellers</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'seller-details'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-sellers-details">Sellers Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-reviews">Reviews</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarReports" aria-expanded="false" aria-controls="sidebarReports" class="side-nav-link">
                                <span class="menu-text" data-lang="eco-reports"> Reports </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarReports">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'product-view'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-views">Product Views</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['apps', 'ecommerce', 'sales'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="eco-pro-sales">Sales</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-mail"></i></span>
                    <span class="menu-text" data-lang="email">Email</span>
                    <span class="badge text-bg-danger">New</span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'email' ,'inbox'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="email-inbox">Inbox</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'email' ,'details'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="email-details">Details</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'email' ,'compose'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="email-compose">Compose</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-users"></i></span>
                    <span class="menu-text" data-lang="users"> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'users', 'contacts'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="contacts">Contacts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'users', 'roles'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="roles">Roles</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'users', 'permissions'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="permissions">Permissions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
                    <span class="menu-text" data-lang="projects"> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'index'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="projects">My Projects</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'list'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="projects-list">Projects List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'details'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="project-details">View Project</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'kanban'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="project-kanban">Kanban Board</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'team-board'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="project-team-board">Team Board</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('third', ['apps', 'projects', 'activity'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="project-activity">Activity Steam</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{route('second', ['apps', 'file-manager'])}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-folder"></i></span>
                    <span class="menu-text" data-lang="file-manager"> File Manager </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'chat'])}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-message-dots"></i></span>
                    <span class="menu-text" data-lang="chat"> Chat </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('second', ['apps', 'calendar'])}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-calendar"></i></span>
                    <span class="menu-text" data-lang="calendar"> Calendar </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-invoice"></i></span>
                    <span class="menu-text" data-lang="invoice"> Invoice</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'invoice', 'index'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="invoices">Invoices</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'invoice', 'details'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="invoice-details">Single Invoice</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'invoice', 'create'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="invoice-create">New Invoice</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOtherApps" aria-expanded="false" aria-controls="sidebarOtherApps" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-apps"></i></span>
                    <span class="menu-text" data-lang="otherapps"> Other Apps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOtherApps">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'companies'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="companies">Companies</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'clients'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="clients">Clients</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'outlook'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="outlook">Outlook View</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'vote-list'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="vote-list">Vote List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'issue-tracker'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="issue-tracker">Issue Tracker</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'api-keys'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="api-keys">API Keys</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'blog'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="blog">Blog</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'article'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="article">Article</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'pin-board'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pin-board">Pin Board</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'forum-view'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="forum-view">Forum View</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('third', ['apps', 'others', 'forum-post'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="forum-post">Forum Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2" data-lang="pages-title">Custom Pages</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-files"></i></span>
                    <span class="menu-text" data-lang="pages"> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'profile'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-profile">Profile</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'faq'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-faq">FAQ</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'pricing'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-pricing">Pricing</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'empty'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-empty">Empty Page</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'timeline'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-timeline">Timeline</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'search-results'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-search-results">Search Results</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'coming-soon'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-coming-soon">Coming Soon</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['pages', 'terms-conditions'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="pages-terms-conditions">Terms & Conditions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMiscellaneous" aria-expanded="false" aria-controls="sidebarMiscellaneous" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-package"></i></span>
                    <span class="menu-text" data-lang="miscellaneous"> Miscellaneous </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMiscellaneous">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'nestable'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-nestable">Nestable List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'text-diff'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-text-diff">Text Diff</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'pdf-viewer'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-pdf-viewer">PDF Viewer</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'i18'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-i18">i18 Support</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'sweet-alerts'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-sweet-alerts">Sweet Alerts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'idle-timer'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-idle-timer">Idle Timer</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'pass-meter'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-pass-meter">Password Meter</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'live-favicon'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-live-favicon">Live Favicon</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'clipboard'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-clipboard">Clipboard</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'tree-view'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-tree-view">Tree View</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'loading-buttons'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-loading-buttons">Loading Buttons</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'gallery'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-gallery">Gallery</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'masonry'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-masonry">Masonry</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'tour'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-tour">Tour</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['miscellaneous', 'animation'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="misc-animation">Animation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-lock"></i></span>
                    <span class="menu-text" data-lang="authentication"> Authentication </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarOneAuth" aria-expanded="false" aria-controls="sidebarOneAuth" class="side-nav-link">
                                <span class="menu-text" data-lang="version-1"> Version 1 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarOneAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'login'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-login">Login</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'register'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-register">Register</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'forgot-password'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-forgot-pass">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'confirm-password'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-confirm-pass">Confirm Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'two-factor'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-two-factor">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'lock-screen'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-lock-screen">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'success-mail'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-success-mail">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'login-pin'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-login-pin">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth1', 'delete-account'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-delete-account">Delete Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTwoAuth" aria-expanded="false" aria-controls="sidebarTwoAuth" class="side-nav-link">
                                <span class="menu-text" data-lang="version-2"> Version 2 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTwoAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'login']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-login">Login</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'register']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-register">Register</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'forgot-password']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-forgot-pass">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'reset-password']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-new-pass">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'two-factor']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-two-factor">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'lock-screen']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-lock-screen">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'success-mail']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-success-mail">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'login-pin']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-login-pin">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth2', 'delete-account']) }}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-2-delete-account">Delete Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThreeAuth" aria-expanded="false" aria-controls="sidebarThreeAuth" class="side-nav-link">
                                <span class="menu-text" data-lang="version-3"> Version 3 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThreeAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'login'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-login">Login</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'register'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-register">Register</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'forgot-password'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-forgot-pass">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'reset-password'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-new-pass">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'two-factor'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-two-factor">Two Factor</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'lock-screen'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-lock-screen">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'success-mail'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-success-mail">Success Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'login-pin'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-login-pin">Login with PIN</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['auth3', 'delete-account'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="auth-3-delete-account">Delete Account</span>
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
                    <span class="menu-text" data-lang="error-pages"> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesError">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '400'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-400">400</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '401'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-401">401</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '403'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-403">403</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '404'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-404">404</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '408'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-408">408</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', '500'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="error-500">500</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['error', 'maintenance'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="maintenance">Maintenance</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2" data-lang="layouts-title">Layouts</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout"></i></span>
                    <span class="menu-text" data-lang="layout-options"> Layout Options </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['layouts-eg', 'scrollable'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="layouts-scrollable">Scrollable</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['layouts-eg', 'compact'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="layouts-compact">Compact</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['layouts-eg', 'boxed'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="layouts-boxed">Boxed</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['layouts-eg', 'horizontal'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="layouts-horizontal">Horizontal</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['layouts-eg', 'preloader'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="layouts-preloader">Preloader</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSidebars" aria-expanded="false" aria-controls="sidebarSidebars" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-sidebar"></i></span>
                    <span class="menu-text" data-lang="sidebars"> Sidebars </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSidebars">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'light'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-light">Light Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'gradient'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-gradient">Gradient Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'gray'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-gray">Gray Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'image'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-image">Image Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'compact'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-compact">Compact Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'icon-view'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-icon-view">Icon View Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'on-hover'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-on-hover">On Hover Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'on-hover-active'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-on-hover-active">On Hover Active</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'offcanvas'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-offcanvas">Offcanvas Menu</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'no-icons'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-no-icons">No Icons with Lines</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['sidebars', 'with-lines'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="sidebar-with-lines">Sidebar with Lines</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTopbars" aria-expanded="false" aria-controls="sidebarTopbars" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-layout-bottombar"></i></span>
                    <span class="menu-text" data-lang="topbar"> Topbar </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTopbars">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second',['topbar', 'dark'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="topbar-dark">Dark Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second',['topbar', 'gray'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="topbar-gray">Gray Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second',['topbar', 'gradient'])}}" target="_blank" class="side-nav-link">
                                <span class="menu-text" data-lang="topbar-gradient">Gradient Topbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second',['topbar', 'sub-items'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="topbar-sub-items">Topbar with Sub Items</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second',['topbar', 'tools'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="topbar-tools">Topbar with Tools</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2" data-lang="components-title">Components</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-palette"></i></span>
                    <span class="menu-text" data-lang="base-ui"> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'accordions'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-accordions">Accordions</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'alerts'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-alerts">Alerts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'images'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-images">Images</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'badges'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-badges">Badges</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'breadcrumb'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-breadcrumb">Breadcrumb</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'buttons'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-buttons">Buttons</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'cards'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-cards">Cards</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'carousel'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-carousel">Carousel</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'collapse'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-collapse">Collapse</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'colors'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-colors">Colors</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'dropdowns'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-dropdowns">Dropdowns</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'videos'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-videos">Videos</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'grid'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-grid">Grid Options</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'links'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-links">Links</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'list-group'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-list-group">List Group</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'modals'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-modals">Modals</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'notifications'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-notifications">Notifications</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'offcanvas'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-offcanvas">Offcanvas</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'placeholders'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-placeholders">Placeholders</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'pagination'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-pagination">Pagination</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'popovers'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-popovers">Popovers</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'progress'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-progress">Progress</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'scrollspy'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-scrollspy">Scrollspy</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'spinners'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-spinners">Spinners</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'tabs'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-tabs">Tabs</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'tooltips'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-tooltips">Tooltips</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'typography'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-typography">Typography</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['ui', 'utilities'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="ui-utilities">Utilities</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('any', ['widgets'])}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-category"></i></span>
                    <span class="menu-text" data-lang="widgets"> Widgets </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('any', ['metrics'])}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-chart-histogram"></i></span>
                    <span class="menu-text" data-lang="metrics"> Metrics </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-chart-donut"></i></span>
                    <span class="menu-text" data-lang="graphs"> Graphs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts" class="side-nav-link">
                                <span class="menu-text" data-lang="apex-charts"> Apex Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarApexCharts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'area'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-area">Area</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'bar'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-bar">Bar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'bubble'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-bubble">Bubble</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'candlestick'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-candlestick">Candlestick</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'column'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-column">Column</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'heatmap'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-heatmap">Heatmap</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'line'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-line">Line</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'mixed'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-mixed">Mixed</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'timeline'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-timeline">Timeline</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'boxplot'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-boxplot">Boxplot</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'treemap'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-treemap">Treemap</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'pie'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-pie">Pie</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'radar'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-radar">Radar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'radialbar'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-radialbar">RadialBar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'scatter'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-scatter">Scatter</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'polar-area'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-polar-area">Polar Area</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'sparklines'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-sparklines">Sparklines</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'range'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-range">Range</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'funnel'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-funnel">Funnel</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'apex', 'slope'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-apex-slope">Slope</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcharts" aria-expanded="false" aria-controls="sidebarEcharts" class="side-nav-link">
                                <span class="menu-text" data-lang="echarts"> Echarts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcharts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'line'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-line">Line</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'bar'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-bar">Bar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'pie'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-pie">Pie</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'scatter'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-scatter">Scatter</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'geo-map'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-geo-map">GEO Map</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'gauge'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-gauge">Gauge</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'candlestick'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-candlestick">Candlestick</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'area'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-area">Area</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'radar'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-radar">Radar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'heatmap'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-heatmap">Heatmap</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('third', ['charts', 'echarts', 'other'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="charts-echart-other">Other</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['charts', 'apextree'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="charts-apextree">Apex Tree</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['charts', 'apexsankey'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="charts-apexsankey">Apex Sankey</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-checkup-list"></i></span>
                    <span class="menu-text" data-lang="forms">Forms</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'elements'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-elements">Basic Elements</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'pickers'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-pickers">Pickers</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'select'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-select">Select</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'validation'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-validation">Validation</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'wizard'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-wizard">Wizard</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'file-uploads'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-fileuploads">File Uploads</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'text-editors'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-text-editors">Text Editors</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'range-slider'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-range-slider">Range Slider</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'layouts'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-layouts">Layouts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['forms', 'other-plugins'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="form-other-plugins">Other Plugins</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-table-column"></i></span>
                    <span class="menu-text" data-lang="tables">Tables</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['tables', 'static'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="tables-static">Static Tables</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['tables', 'custom'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="tables-custom">Custom Tables</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDataTables" aria-expanded="false" aria-controls="sidebarDataTables" class="side-nav-link">
                                <span class="menu-text" data-lang="datatables">DataTables</span>
                                <span class="badge bg-success">12</span>
                            </a>
                            <div class="collapse" id="sidebarDataTables">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-basic'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-basic">Basic</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-export-data'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-export-data">Export Data</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-select'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-select">Select</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-ajax'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-ajax">Ajax</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-javascript'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-javascript">Javascript Source</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-rendering'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-rendering">Data Rendering</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-scroll'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-scroll">Scroll</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-columns'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-columns">Show & Hide Column</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-child-rows'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-child-rows">Child Rows</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-column-searching'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-column-searching">Column Searching</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-range-search'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-range-search">Range Search</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-fixed-header'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-fixed-header">Fixed Header</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-add-rows'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-add-rows">Add Rows</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="{{ route('second', ['tables', 'datatable-checkbox-select'])}}" class="side-nav-link">
                                            <span class="menu-text" data-lang="tables-datatables-checkbox-select">Checkbox Select</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-icons"></i></span>
                    <span class="menu-text" data-lang="icons">Icons</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['icons', 'tabler'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="icons-tabler">Tabler</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['icons', 'lucide'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="icons-lucide">Lucide</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['icons', 'flags'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="icons-flags">Flags</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-map"></i></span>
                    <span class="menu-text" data-lang="maps">Maps</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['maps', 'google'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="maps-google">Google Maps</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['maps', 'vector'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="maps-vector">Vector Maps</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('second', ['maps', 'leaflet'])}}" class="side-nav-link">
                                <span class="menu-text" data-lang="maps-leaflet">Leaflet Maps</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title mt-2" data-lang="items-title">Menu Items</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMenuLevels" aria-expanded="false" aria-controls="sidebarMenuLevels" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-sitemap"></i></span>
                    <span class="menu-text" data-lang="menu-levels"> Menu Levels </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMenuLevels">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel" class="side-nav-link">
                                <span class="menu-text" data-lang="second-level"> Second Level </span>
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
                                <span class="menu-text" data-lang="third-level"> Third Level </span>
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
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link disabled">
                    <span class="menu-icon"><i class="ti ti-ban"></i></span>
                    <span class="menu-text" data-lang="disabled-menu"> Disabled Menu </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link special-menu">
                    <span class="menu-icon"><i class="ti ti-star"></i></span>
                    <span class="menu-text" data-lang="special-menu"> Special Menu </span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- Sidenav Menu End -->
