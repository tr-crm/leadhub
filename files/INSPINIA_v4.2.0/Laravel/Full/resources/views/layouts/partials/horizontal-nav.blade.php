<!-- Horizontal Menu Start -->
<header class="topnav">
    <nav class="navbar navbar-expand-lg">
        <nav class="container-fluid">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-dashboards" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                            <a href="{{ route('second', ['dashboards', 'index']) }}" class="dropdown-item">Dashboard v.1</a>
                            <a href="{{ route('second', ['dashboards', 'index-2']) }}" class="dropdown-item">Dashboard v.2</a>
                            <a href="{{ route('second', ['dashboards', 'index-3']) }}" class="dropdown-item">Dashboard v.3</a>
                            <a href="#!" class="dropdown-item disabled">Dashboard v.4 <span class="badge text-bg-light opacity-50">soon</span></a>
                            <a href="#!" class="dropdown-item disabled">Dashboard v.5 <span class="badge text-bg-light opacity-50">soon</span></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-apps"></i></span>
                            <span class="menu-text">Apps</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('second', ['apps', 'calendar'])}}" class="dropdown-item"><i class="ti ti-calendar"></i> Calendar</a>
                            <a href="{{ route('second', ['apps', 'chat'])}}" class="dropdown-item"><i class="ti ti-message"></i> Chat</a>
                            <a href="{{route('second', ['apps', 'file-manager'])}}" class="dropdown-item"><i class="ti ti-folder"></i> File Manager</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-basket"></i> Ecommerce <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'products'])}}" class="dropdown-item">Products</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'product-grid'])}}" class="dropdown-item">Products Grid</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'product-details'])}}" class="dropdown-item">Product Details</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'add-product'])}}" class="dropdown-item">Add Product</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'categories'])}}" class="dropdown-item">Categories</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'orders'])}}" class="dropdown-item">Orders</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'order-details'])}}" class="dropdown-item">Order Details</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'customers'])}}" class="dropdown-item">Customers</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'sellers'])}}" class="dropdown-item">Sellers</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'seller-details'])}}" class="dropdown-item">Sellers Details</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" class="dropdown-item">Reviews</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'product-view'])}}" class="dropdown-item">Product Views</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'sales'])}}" class="dropdown-item">Sales</a>
                                </div>
                            </div>

                            <!-- Email Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-mail"></i> Email <span class="badge text-bg-danger ms-1">New</span> <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="{{ route('third', ['apps', 'email' ,'inbox'])}}" class="dropdown-item">Inbox</a>
                                    <a href="{{ route('third', ['apps', 'email' ,'details'])}}" class="dropdown-item">Details</a>
                                    <a href="{{ route('third', ['apps', 'email' ,'compose'])}}" class="dropdown-item">Compose</a>
                                </div>
                            </div>

                            <!-- Users Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-users" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-users"></i> Users <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-users">
                                    <a href="{{route('third', ['apps', 'users', 'contacts'])}}" class="dropdown-item">Contacts</a>
                                    <a href="{{route('third', ['apps', 'users', 'roles'])}}" class="dropdown-item">Roles</a>
                                    <a href="{{route('third', ['apps', 'users', 'permissions'])}}" class="dropdown-item">Permissions</a>
                                </div>
                            </div>

                            <!-- Projects Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-projects" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-briefcase"></i> Projects <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-projects">
                                    <a href="{{route('third', ['apps', 'projects', 'index'])}}" class="dropdown-item">My Projects</a>
                                    <a href="{{route('third', ['apps', 'projects', 'list'])}}" class="dropdown-item">Projects List</a>
                                    <a href="{{route('third', ['apps', 'projects', 'details'])}}" class="dropdown-item">View Project</a>
                                    <a href="{{route('third', ['apps', 'projects', 'kanban'])}}" class="dropdown-item">Kanban Board</a>
                                    <a href="{{route('third', ['apps', 'projects', 'team-board'])}}" class="dropdown-item">Team Board</a>
                                    <a href="{{route('third', ['apps', 'projects', 'activity'])}}" class="dropdown-item">Activity Stream</a>
                                </div>
                            </div>

                            <!-- Invoice Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-invoice" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-invoice"></i> Invoice <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="{{ route('third', ['apps', 'invoice', 'index'])}}" class="dropdown-item">Invoices</a>
                                    <a href="{{ route('third', ['apps', 'invoice', 'details'])}}" class="dropdown-item">Single Invoice</a>
                                    <a href="{{ route('third', ['apps', 'invoice', 'create'])}}" class="dropdown-item">New Invoice</a>
                                </div>
                            </div>

                            <!-- Other Apps Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-otherapps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-circle-dashed-plus"></i> Other Apps <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-otherapps">
                                    <a href="{{ route('third', ['apps', 'others', 'companies'])}}" class="dropdown-item">Companies</a>
                                    <a href="{{ route('third', ['apps', 'others', 'clients'])}}" class="dropdown-item">Clients</a>
                                    <a href="{{ route('third', ['apps', 'others', 'outlook'])}}" class="dropdown-item">Outlook View</a>
                                    <a href="{{ route('third', ['apps', 'others', 'vote-list'])}}" class="dropdown-item">Vote List</a>
                                    <a href="{{ route('third', ['apps', 'others', 'issue-tracker'])}}" class="dropdown-item">Issue Tracker</a>
                                    <a href="{{ route('third', ['apps', 'others', 'api-keys'])}}" class="dropdown-item">API Keys</a>
                                    <a href="{{ route('third', ['apps', 'others', 'blog'])}}" class="dropdown-item">Blog</a>
                                    <a href="{{ route('third', ['apps', 'others', 'article'])}}" class="dropdown-item">Article</a>
                                    <a href="{{ route('third', ['apps', 'others', 'pin-board'])}}" class="dropdown-item">Pin Board</a>
                                    <a href="{{ route('third', ['apps', 'others', 'forum-view'])}}" class="dropdown-item">Forum View</a>
                                    <a href="{{ route('third', ['apps', 'others', 'forum-post'])}}" class="dropdown-item">Forum Post</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-files"></i></span>
                            <span class="menu-text">Pages</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <!-- Pages Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-genr-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-notebook"></i>General Pages <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-genr-pages">
                                    <a href="{{ route('second', ['pages', 'profile'])}}" class="dropdown-item">Profile</a>
                                    <a href="{{ route('second', ['pages', 'faq'])}}" class="dropdown-item">FAQ</a>
                                    <a href="{{ route('second', ['pages', 'pricing'])}}" class="dropdown-item">Pricing</a>
                                    <a href="{{ route('second', ['pages', 'empty'])}}" class="dropdown-item">Empty Page</a>
                                    <a href="{{ route('second', ['pages', 'timeline'])}}" class="dropdown-item">Timeline</a>
                                    <a href="{{ route('second', ['pages', 'search-results'])}}" class="dropdown-item">Search Results</a>
                                    <a href="{{ route('second', ['pages', 'coming-soon'])}}" class="dropdown-item">Coming Soon</a>
                                    <a href="{{ route('second', ['pages', 'terms-conditions'])}}" class="dropdown-item">Terms & Conditions</a>
                                </div>
                            </div>

                            <!-- Miscellaneous Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-misc" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-package"></i> Miscellaneous <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-misc">
                                    <a href="{{ route('second', ['miscellaneous', 'nestable'])}}" class="dropdown-item">Nestable List</a>
                                    <a href="{{ route('second', ['miscellaneous', 'text-diff'])}}" class="dropdown-item">Text Diff</a>
                                    <a href="{{ route('second', ['miscellaneous', 'pdf-viewer'])}}" class="dropdown-item">PDF Viewer</a>
                                    <a href="{{ route('second', ['miscellaneous', 'i18'])}}" class="dropdown-item">i18 Support</a>
                                    <a href="{{ route('second', ['miscellaneous', 'sweet-alerts'])}}" class="dropdown-item">Sweet Alerts</a>
                                    <a href="{{ route('second', ['miscellaneous', 'idle-timer'])}}" class="dropdown-item">Idle Timer</a>
                                    <a href="{{ route('second', ['miscellaneous', 'pass-meter'])}}" class="dropdown-item">Password Meter</a>
                                    <a href="{{ route('second', ['miscellaneous', 'live-favicon'])}}" class="dropdown-item">Live Favicon</a>
                                    <a href="{{ route('second', ['miscellaneous', 'clipboard'])}}" class="dropdown-item">Clipboard</a>
                                    <a href="{{ route('second', ['miscellaneous', 'tree-view'])}}" class="dropdown-item">Tree View</a>
                                    <a href="{{ route('second', ['miscellaneous', 'loading-buttons'])}}" class="dropdown-item">Loading Buttons</a>
                                    <a href="{{ route('second', ['miscellaneous', 'gallery'])}}" class="dropdown-item">Gallery</a>
                                    <a href="{{ route('second', ['miscellaneous', 'masonry'])}}" class="dropdown-item">Masonry</a>
                                    <a href="{{ route('second', ['miscellaneous', 'tour'])}}" class="dropdown-item">Tour</a>
                                    <a href="{{ route('second', ['miscellaneous', 'animation'])}}" class="dropdown-item">Animation</a>
                                </div>
                            </div>

                            <!-- Auth Version 1 Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-shield-lock"></i> Authentication 1 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth-v1">
                                    <a href="{{ route('second', ['auth1', 'login'])}}" class="dropdown-item">Login</a>
                                    <a href="{{ route('second', ['auth1', 'register'])}}" class="dropdown-item">Register</a>
                                    <a href="{{ route('second', ['auth1', 'forgot-password'])}}" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('second', ['auth1', 'reset-password'])}}" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('second', ['auth1', 'two-factor'])}}" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('second', ['auth1', 'lock-screen'])}}" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('second', ['auth1', 'success-mail'])}}" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('second', ['auth1', 'login-pin'])}}" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('second', ['auth1', 'delete-account'])}}" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-user-hexagon"></i> Authentication 2 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth-v2">
                                    <a href="{{ route('second', ['auth2', 'login']) }}" class="dropdown-item">Login</a>
                                    <a href="{{ route('second', ['auth2', 'register']) }}" class="dropdown-item">Register</a>
                                    <a href="{{ route('second', ['auth2', 'forgot-password']) }}" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('second', ['auth2', 'reset-password']) }}" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('second', ['auth2', 'two-factor']) }}" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('second', ['auth2', 'lock-screen']) }}" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('second', ['auth2', 'success-mail']) }}" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('second', ['auth2', 'login-pin']) }}" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('second', ['auth2', 'delete-account']) }}" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v3" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-lock-access"></i> Authentication 3 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth-v3">
                                    <a href="{{ route('second', ['auth3', 'login'])}}" class="dropdown-item">Login</a>
                                    <a href="{{ route('second', ['auth3', 'register'])}}" class="dropdown-item">Register</a>
                                    <a href="{{ route('second', ['auth3', 'forgot-password'])}}" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('second', ['auth3', 'reset-password'])}}" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('second', ['auth3', 'two-factor'])}}" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('second', ['auth3', 'lock-screen'])}}" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('second', ['auth3', 'success-mail'])}}" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('second', ['auth3', 'login-pin'])}}" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('second', ['auth3', 'delete-account'])}}" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-alert-hexagon"></i> Error Pages <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                    <a href="{{ route('second', ['error', '400'])}}" class="dropdown-item">400 - Bad Request</a>
                                    <a href="{{ route('second', ['error', '401'])}}" class="dropdown-item">401 - Unauthorized</a>
                                    <a href="{{ route('second', ['error', '403'])}}" class="dropdown-item">403 - Forbidden</a>
                                    <a href="{{ route('second', ['error', '404'])}}" class="dropdown-item">404 - Not Found</a>
                                    <a href="{{ route('second', ['error', '408'])}}" class="dropdown-item">408 - Timeout</a>
                                    <a href="{{ route('second', ['error', '500'])}}" class="dropdown-item">500 - Server Error</a>
                                    <a href="{{ route('second', ['error', 'maintenance'])}}" class="dropdown-item">Maintenance</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-components"></i></span>
                            <span class="menu-text">Components</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-baseui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-palette"></i> Base UI One <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-baseui">
                                    <a href="{{ route('second', ['ui', 'accordions'])}}" class="dropdown-item">Accordions</a>
                                    <a href="{{ route('second', ['ui', 'alerts'])}}" class="dropdown-item">Alerts</a>
                                    <a href="{{ route('second', ['ui', 'images'])}}" class="dropdown-item">Images</a>
                                    <a href="{{ route('second', ['ui', 'badges'])}}" class="dropdown-item">Badges</a>
                                    <a href="{{ route('second', ['ui', 'breadcrumb'])}}" class="dropdown-item">Breadcrumb</a>
                                    <a href="{{ route('second', ['ui', 'buttons'])}}" class="dropdown-item">Buttons</a>
                                    <a href="{{ route('second', ['ui', 'cards'])}}" class="dropdown-item">Cards</a>
                                    <a href="{{ route('second', ['ui', 'carousel'])}}" class="dropdown-item">Carousel</a>
                                    <a href="{{ route('second', ['ui', 'collapse'])}}" class="dropdown-item">Collapse</a>
                                    <a href="{{ route('second', ['ui', 'colors'])}}" class="dropdown-item">Colors</a>
                                    <a href="{{ route('second', ['ui', 'dropdowns'])}}" class="dropdown-item">Dropdowns</a>
                                    <a href="{{ route('second', ['ui', 'videos'])}}" class="dropdown-item">Videos</a>
                                    <a href="{{ route('second', ['ui', 'grid'])}}" class="dropdown-item">Grid Options</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-baseuiTwo" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-palette"></i> Base UI Two<div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-baseuiTwo">
                                    <a href="{{ route('second', ['ui', 'links'])}}" class="dropdown-item">Links</a>
                                    <a href="{{ route('second', ['ui', 'list-group'])}}" class="dropdown-item">List Group</a>
                                    <a href="{{ route('second', ['ui', 'modals'])}}" class="dropdown-item">Modals</a>
                                    <a href="{{ route('second', ['ui', 'notifications'])}}" class="dropdown-item">Notifications</a>
                                    <a href="{{ route('second', ['ui', 'offcanvas'])}}" class="dropdown-item">Offcanvas</a>
                                    <a href="{{ route('second', ['ui', 'placeholders'])}}" class="dropdown-item">Placeholders</a>
                                    <a href="{{ route('second', ['ui', 'pagination'])}}" class="dropdown-item">Pagination</a>
                                    <a href="{{ route('second', ['ui', 'popovers'])}}" class="dropdown-item">Popovers</a>
                                    <a href="{{ route('second', ['ui', 'progress'])}}" class="dropdown-item">Progress</a>
                                    <a href="{{ route('second', ['ui', 'scrollspy'])}}" class="dropdown-item">Scrollspy</a>
                                    <a href="{{ route('second', ['ui', 'spinners'])}}" class="dropdown-item">Spinners</a>
                                    <a href="{{ route('second', ['ui', 'tabs'])}}" class="dropdown-item">Tabs</a>
                                    <a href="{{ route('second', ['ui', 'tooltips'])}}" class="dropdown-item">Tooltips</a>
                                    <a href="{{ route('second', ['ui', 'typography'])}}" class="dropdown-item">Typography</a>
                                    <a href="{{ route('second', ['ui', 'utilities'])}}" class="dropdown-item">Utilities</a>
                                </div>
                            </div>

                            <a href="{{ route('any', ['widgets'])}}" class="dropdown-item"><i class="ti ti-category"></i> Widgets</a>
                            <a href="{{ route('any', ['metrics'])}}" class="dropdown-item"><i class="ti ti-chart-histogram"></i> Metrics</a>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-apexcharts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-chart-bar"></i> Apex Charts 1<div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-apexcharts">
                                    <a href="{{ route('third', ['charts', 'apex', 'area'])}}" class="dropdown-item">Area</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'bar'])}}" class="dropdown-item">Bar</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'bubble'])}}" class="dropdown-item">Bubble</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'candlestick'])}}" class="dropdown-item">Candlestick</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'column'])}}" class="dropdown-item">Column</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'heatmap'])}}" class="dropdown-item">Heatmap</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'line'])}}" class="dropdown-item">Line</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'mixed'])}}" class="dropdown-item">Mixed</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'timeline'])}}" class="dropdown-item">Timeline</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'boxplot'])}}" class="dropdown-item">Boxplot</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'treemap'])}}" class="dropdown-item">Treemap</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-apexchartsTwo" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-chart-bar"></i> Apex Charts 2<div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-apexchartsTwo">
                                    <a href="{{ route('third', ['charts', 'apex', 'pie'])}}" class="dropdown-item">Pie</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'radar'])}}" class="dropdown-item">Radar</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'radialbar'])}}" class="dropdown-item">RadialBar</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'scatter'])}}" class="dropdown-item">Scatter</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'polar-area'])}}" class="dropdown-item">Polar Area</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'sparklines'])}}" class="dropdown-item">Sparklines</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'range'])}}" class="dropdown-item">Range</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'funnel'])}}" class="dropdown-item">Funnel</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'slope'])}}" class="dropdown-item">Slope</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'apextree'])}}" class="dropdown-item">Apex Tree</a>
                                    <a href="{{ route('third', ['charts', 'apex', 'apexsankey'])}}" class="dropdown-item">Apex Sankey</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-echarts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-chart-pie"></i> Echarts <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-echarts">
                                    <a href="{{ route('third', ['charts', 'echarts', 'line'])}}" class="dropdown-item">Line</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'bar'])}}" class="dropdown-item">Bar</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'pie'])}}" class="dropdown-item">Pie</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'scatter'])}}" class="dropdown-item">Scatter</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'geo-map'])}}" class="dropdown-item">GEO Map</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'guage'])}}" class="dropdown-item">Gauge</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'candlestick'])}}" class="dropdown-item">Candlestick</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'area'])}}" class="dropdown-item">Area</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'radar'])}}" class="dropdown-item">Radar</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'heatmap'])}}" class="dropdown-item">Heatmap</a>
                                    <a href="{{ route('third', ['charts', 'echarts', 'other'])}}" class="dropdown-item">Other</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-checkup-list"></i> Forms <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-forms">
                                    <a href="{{ route('second', ['forms', 'elements'])}}" class="dropdown-item">Basic Elements</a>
                                    <a href="{{ route('second', ['forms', 'pickers'])}}" class="dropdown-item">Pickers</a>
                                    <a href="{{ route('second', ['forms', 'select'])}}" class="dropdown-item">Select</a>
                                    <a href="{{ route('second', ['forms', 'validation'])}}" class="dropdown-item">Validation</a>
                                    <a href="{{ route('second', ['forms', 'wizard'])}}" class="dropdown-item">Wizard</a>
                                    <a href="{{ route('second', ['forms', 'fileuploads'])}}" class="dropdown-item">File Uploads</a>
                                    <a href="{{ route('second', ['forms', 'text-editors'])}}" class="dropdown-item">Text Editors</a>
                                    <a href="{{ route('second', ['forms', 'range-slider'])}}" class="dropdown-item">Range Slider</a>
                                    <a href="{{ route('second', ['forms', 'layouts'])}}" class="dropdown-item">Layouts</a>
                                    <a href="{{ route('second', ['forms', 'other-plugins'])}}" class="dropdown-item">Other Plugins</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-icons"></i> Icons <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-icons">
                                    <a href="{{ route('second', ['icons', 'tabler'])}}" class="dropdown-item">Tabler</a>
                                    <a href="{{ route('second', ['icons', 'lucide'])}}" class="dropdown-item">Lucide</a>
                                    <a href="{{ route('second', ['icons', 'flags'])}}" class="dropdown-item">Flags</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-map"></i> Maps <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-maps">
                                    <a href="{{ route('second', ['maps', 'google'])}}" class="dropdown-item">Google Maps</a>
                                    <a href="{{ route('second', ['maps', 'vector'])}}" class="dropdown-item">Vector Maps</a>
                                    <a href="{{ route('second', ['maps', 'leaflet'])}}" class="dropdown-item">Leaflet Maps</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-table-column"></i></span>
                            <span class="menu-text">Tables</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-tables">
                            <a href="{{ route('second', ['tables', 'static'])}}" class="dropdown-item"><i class="ti ti-border-all"></i> Static Tables</a>
                            <a href="{{ route('second', ['tables', 'custom'])}}" class="dropdown-item"><i class="ti ti-stack-forward"></i> Custom Tables</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-datatables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-table"></i> DataTables <span class="badge bg-success ms-1">14</span> <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-datatables">
                                    <a href="{{ route('second', ['tables', 'datatable-basic'])}}" class="dropdown-item">Basic</a>
                                    <a href="{{ route('second', ['tables', 'datatable-export-data'])}}" class="dropdown-item">Export Data</a>
                                    <a href="{{ route('second', ['tables', 'datatable-select'])}}" class="dropdown-item">Select</a>
                                    <a href="{{ route('second', ['tables', 'datatable-ajax'])}}" class="dropdown-item">Ajax</a>
                                    <a href="{{ route('second', ['tables', 'datatable-javascript'])}}" class="dropdown-item">Javascript Source</a>
                                    <a href="{{ route('second', ['tables', 'datatable-rendering'])}}" class="dropdown-item">Data Rendering</a>
                                    <a href="{{ route('second', ['tables', 'datatable-scroll'])}}" class="dropdown-item">Scroll</a>
                                    <a href="{{ route('second', ['tables', 'datatable-columns'])}}" class="dropdown-item">Show & Hide Column</a>
                                    <a href="{{ route('second', ['tables', 'datatable-child-rows'])}}" class="dropdown-item">Child Rows</a>
                                    <a href="{{ route('second', ['tables', 'datatable-column-searching'])}}" class="dropdown-item">Column Searching</a>
                                    <a href="{{ route('second', ['tables', 'datatable-range-search'])}}" class="dropdown-item">Range Search</a>
                                    <a href="{{ route('second', ['tables', 'datatable-fixed-header'])}}" class="dropdown-item">Fixed Header</a>
                                    <a href="{{ route('second', ['tables', 'datatable-add-rows'])}}" class="dropdown-item">Add Rows</a>
                                    <a href="{{ route('second', ['tables', 'datatable-checkbox-select'])}}" class="dropdown-item">Checkbox Select</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-layout"></i></span>
                            <span class="menu-text">Layouts</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts-one" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-layout"></i> Layout Options <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-layouts-one">
                                    <a href="{{ route('second', ['layouts-eg', 'scrollable'])}}" class="dropdown-item" target="_blank">Scrollable</a>
                                    <a href="{{ route('second', ['layouts-eg', 'compact'])}}" class="dropdown-item" target="_blank">Compact</a>
                                    <a href="{{ route('second', ['layouts-eg', 'boxed'])}}" class="dropdown-item" target="_blank">Boxed</a>
                                    <a href="{{ route('second', ['layouts-eg', 'horizontal'])}}" class="dropdown-item" target="_blank">Horizontal</a>
                                    <a href="{{ route('second', ['layouts-eg', 'preloader'])}}" class="dropdown-item" target="_blank">Preloader</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-sidebars" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-layout-sidebar"></i> Sidebars <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-sidebars">
                                    <a href="{{ route('second', ['sidebars', 'light'])}}" class="dropdown-item" target="_blank">Light Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'gradient'])}}" class="dropdown-item" target="_blank">Gradient Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'image'])}}" class="dropdown-item" target="_blank">Image Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'compact'])}}" class="dropdown-item" target="_blank">Compact Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'icon-view'])}}" class="dropdown-item" target="_blank">Icon View Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'on-hover'])}}" class="dropdown-item" target="_blank">On Hover Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'on-hover-active'])}}" class="dropdown-item" target="_blank">On Hover Active</a>
                                    <a href="{{ route('second', ['sidebars', 'offcanvas'])}}" class="dropdown-item" target="_blank">Offcanvas Menu</a>
                                    <a href="{{ route('second', ['sidebars', 'no-icons'])}}" class="dropdown-item" target="_blank">No Icons with Lines</a>
                                    <a href="{{ route('second', ['sidebars', 'with-lines'])}}" class="dropdown-item" target="_blank">Sidebar with Lines</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-topbars" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-box-align-top"></i> Topbar <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-topbars">
                                    <a href="{{ route('second',['topbar', 'dark'])}}" class="dropdown-item" target="_blank">Dark Topbar</a>
                                    <a href="{{ route('second',['topbar', 'gray'])}}" class="dropdown-item" target="_blank">Gray Topbar</a>
                                    <a href="{{ route('second',['topbar', 'gradient'])}}" class="dropdown-item" target="_blank">Gradient Topbar</a>
                                    <a href="{{ route('second',['topbar', 'sub-items'])}}" class="dropdown-item">Topbar with Sub Items</a>
                                    <a href="{{ route('second',['topbar', 'tools'])}}" class="dropdown-item">Topbar with Tools</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('any',['landing'])}}">
                            <span class="menu-icon"><i class="ti ti-rocket"></i></span>
                            <span class="menu-text">Landing</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
</header>
<!-- Horizontal Menu End -->
