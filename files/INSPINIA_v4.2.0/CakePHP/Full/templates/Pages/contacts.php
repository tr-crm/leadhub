<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', ['title' => 'Contacts']) ?>

    <?= $this->element('head_css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?= $this->element('page_title', ['subtitle' => 'Apps', 'title' => 'Contacts']) ?>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <form class="bg-light-subtle rounded border p-3">

                            <div class="row gap-3">
                                <div class="col-lg-4">
                                    <div class="app-search">
                                        <input type="text" class="form-control" placeholder="Search contact name...">
                                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <span class="me-2 fw-semibold">Filter By:</span>

                                        <!-- Designation Filter -->
                                        <div class="app-search">
                                            <select class="form-select form-control my-1 my-md-0">
                                                <option selected>Designation</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Designer">Designer</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Support">Support</option>
                                            </select>
                                            <i data-lucide="user-check" class="app-search-icon text-muted"></i>
                                        </div>

                                        <!-- Location Filter -->
                                        <div class="app-search">
                                            <select class="form-select form-control my-1 my-md-0">
                                                <option selected>Location</option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Canada">Canada</option>
                                            </select>
                                            <i data-lucide="map-pin" class="app-search-icon text-muted"></i>
                                        </div>

                                        <!-- Department Filter -->
                                        <div class="app-search">
                                            <select class="form-select form-control my-1 my-md-0">
                                                <option selected>Department</option>
                                                <option value="UI/UX">UI/UX</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="HR">HR</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance">Finance</option>
                                            </select>
                                            <i data-lucide="layers" class="app-search-icon text-muted"></i>
                                        </div>

                                        <button type="submit" class="btn btn-secondary">Apply</button>

                                        <div role="group" aria-label="Layout toggle button group" class="ms-auto flex-shrink-0">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                            <label class="btn btn-soft-primary btn-icon" for="btnradio1">
                                                <i data-lucide="layout-grid" class="fs-lg"></i>
                                            </label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-soft-primary btn-icon" for="btnradio2">
                                                <i data-lucide="list" class="fs-lg"></i>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-5.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-warning rounded-circle p-1 shadow-sm" title="Rating 4.8">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="pages-profile" class="link-reset">Sophia Carter</a>
                                            <img src="/images/flags/gb.svg" alt="UK" class="ms-2 rounded-circle" height="16">
                                        </h5>
                                        <p class="text-muted mb-1">Lead UI/UX Designer</p>
                                        <span class="badge text-bg-light badge-label">Admin</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">sophia@designhub.com</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-phone"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+44 7911 123456</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-map-pin"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">London, UK</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-link"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.sophiacarter.com</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 30 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <!-- Card 2 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-6.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-success rounded-circle p-1 shadow-sm" title="Rating 4.5">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="pages-profile" class="link-reset">Marcus Lee</a>
                                            <img src="/images/flags/us.svg" alt="US" class="ms-2 rounded-circle" height="16">
                                        </h5>
                                        <p class="text-muted mb-1">Senior Developer</p>
                                        <span class="badge text-bg-light badge-label">Team Lead</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">marcus@devhub.com</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+1 408-222-9876</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Austin, TX</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.devhub.com</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 1 hour ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-7.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-danger rounded-circle p-1 shadow-sm" title="Rating 3.9">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 "><a href="pages-profile" class="link-reset">Emily Davis</a> <img src="/images/flags/us.svg" alt="US" class="ms-2 rounded-circle" height="16"></h5>
                                        <p class="text-muted mb-1">Marketing Strategist</p>
                                        <span class="badge text-bg-light badge-label">Member</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">emily@marketboost.com</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+1 212-555-7890</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">New York, NY</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.marketboost.com</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 10 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-8.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-info rounded-circle p-1 shadow-sm" title="Rating 4.3">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="pages-profile" class="link-reset">Daniel Smith</a> <img src="/images/flags/ca.svg" alt="US" class="ms-2 rounded-circle" height="16"></h5>
                                        <p class="text-muted mb-1">Data Analyst</p>
                                        <span class="badge text-bg-light badge-label">Contributor</span>
                                    </div>

                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">daniel@analyticspro.io</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+1 987-654-3210</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Toronto, Canada</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.analyticspro.io</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 45 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-7.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-success rounded-circle p-1 shadow-sm" title="Rating 4.6">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 d-flex align-items-center">
                                            <a href="pages-profile" class="link-reset">Daniel Morris</a>
                                            <img src="/images/flags/us.svg" alt="USA" class="ms-2 rounded-circle" height="16">
                                        </h5>
                                        <p class="text-muted mb-1">Project Manager</p>
                                        <span class="badge text-bg-light badge-label">Team Lead</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">daniel@projecthub.io</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-phone"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+1 212 555 7890</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-map-pin"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">New York, USA</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle">
                                                    <i class="ti ti-link"></i>
                                                </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.danielmorris.com</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 1 hour ago</span>
                                    <a href="pages-profile" class="btn btn-soft-success btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-3">
                        <!-- Card 2: Jessica Chen -->
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-4.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-success rounded-circle p-1 shadow-sm" title="Rating 4.8">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="pages-profile" class="link-reset">Jessica Chen</a> <img src="/images/flags/cn.svg" alt="CN" class="ms-2 rounded-circle" height="16"></h5>
                                        <p class="text-muted mb-1">UI/UX Designer</p>
                                        <span class="badge text-bg-light badge-label">Editor</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">jessica@uxstudio.cn</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+86 10-1234-5678</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Beijing, China</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.uxstudio.cn</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 20 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <!-- Card 3: Arjun Patel -->
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <div class="avatar rounded-circle flex-shrink-0" style="height: 72px; width: 72px;">
                                            <span class="avatar-title text-bg-primary fw-semibold rounded-circle fs-22">
                                                AP
                                            </span>
                                        </div>
                                        <span class="position-absolute bottom-0 end-0 badge bg-warning rounded-circle p-1 shadow-sm" title="Rating 3.9">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="pages-profile" class="link-reset">Arjun Patel</a> <img src="/images/flags/in.svg" alt="IN" class="ms-2 rounded-circle" height="16"></h5>
                                        <p class="text-muted mb-1">Software Engineer</p>
                                        <span class="badge text-bg-light badge-label">Member</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">arjun@techflow.in</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+91 98765-43210</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Bangalore, India</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.techflow.in</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 10 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <!-- Card 4: Olivia Garcia -->
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                        <img src="/images/users/user-6.jpg" alt="avatar" class="rounded-circle" width="72" height="72">
                                        <span class="position-absolute bottom-0 end-0 badge bg-danger rounded-circle p-1 shadow-sm" title="Rating 2.7">
                                            <i class="ti ti-star text-white"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="pages-profile" class="link-reset">Olivia Garcia</a> <img src="/images/flags/es.svg" alt="ES" class="ms-2 rounded-circle" height="16"></h5>
                                        <p class="text-muted mb-1">Content Strategist</p>
                                        <span class="badge text-bg-light badge-label">Guest</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-icon btn-ghost-light text-muted" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical fs-xl"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-share me-2"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-ban me-2"></i>Block</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-unstyled text-muted mb-4">
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-mail"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">olivia@contentwave.es</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-phone"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#" class="link-reset">+34 912 345 678</a></h5>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-map-pin"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Madrid, Spain</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs avatar-img-size fs-24">
                                                <span class="avatar-title text-bg-light fs-sm rounded-circle"><i class="ti ti-link"></i></span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium"><a href="#">www.contentwave.es</a></h5>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted fs-xs"><i class="ti ti-refresh me-1"></i>Updated 5 min ago</span>
                                    <a href="pages-profile" class="btn btn-soft-primary btn-sm rounded-pill">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

                <ul class="pagination pagination-rounded pagination-boxed justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- container -->

            <?= $this->element('footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->element('customizer') ?>

    <?= $this->element('footer_scripts') ?>

</body>

</html>